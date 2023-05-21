{{-- 
    Mike 
    last updated: 05/20/2023 9:23 localtime
    Created a RANDOM NAME GENERATOR 
    line : 13
--}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.14/vue.min.js" integrity="sha512-BAMfk70VjqBkBIyo9UTRLl3TBJ3M0c6uyy2VMUrq370bWs7kchLNN9j1WiJQus9JAJVqcriIUX859JOm12LWtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
<script src="script">
    
</script>
{{-- Create a random name --}}
<?php 
    $faker = Faker\Factory::create();
    $adjective = $faker->word;
    $noun = $faker->word;
    $codename = isset(Auth::user()->name)?Auth::user()->name:'';
?>

{{-- UI --}}
<section class="w-25 p-3 col-2">
<fieldset class="w-full" id="app" :disabled="isDisabled">
    <a class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <div v-if="isDisabled == false">
            <div v-if="connected == false">
                <span class="translate-middle p-1.5 bg-danger border rounded-circle float-left mt-1 mr-2"></span> 
                Error Server
            </div>
            <div v-if="connected == true">
                <span class="translate-middle p-1.5 bg-success border rounded-circle float-left  mt-1 mr-2"></span> 
                Live Chat 
            </div>
        </div>
        <div v-if="isDisabled == true">
            <h5>Talk to other viewers!</h5>
            <small>Login and join real-time chat! </small>
        </div>
        
    </a>
    <div class="scrollbar overflow-auto py-3 lh-tight bg-light pt-2 pb-2 " style="height:35rem"  >
        <p class="col-12"  v-for="(message, index) in incomingMessages" id="messageBody">
            (@{{ message.time }}) <b>@{{ message.name }}</b>
            @{{ message.message }}
        </p>
    </div>

    {{-- Input Message --}}
    <div>
        {{-- hide name and generate code --}}
    <form class="d-none">
        <label>Name</label>
        <input class="form-control form-control-sm" placeholder="Name" v-model="name" value="">
        <button v-if="connected === false" v-on:click="connect()" type="button" class="mr-2 btn btn-sm btn-primary w-100">
            Connect
        </button>
        <button v-if="connected === true" v-on:click="disconnect()" type="button" class="mr-2 btn btn-sm btn-danger w-100">
            Disconnect
        </button>
    </form>



    <form>
    </div>
      <div class="row mt-2">
        <div class="col-12 text-white" v-show="formError === true">
          <div class="bg-danger p-2 mb-2">
            <p class="p-0 m-0"><b>Error:</b> Invalid message.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <textarea v-model="message" placeholder="Your message ..." class="form-control" rows="3" id="inpMessage"></textarea>
          </div>
        </div>
      </div>
      <div class="row text-right">
        <div class="col-lg">
          <button type="button" v-on:click="sendMessage()" class="btn btn-sm btn-primary w-100 noHover">Send
            Message</button>
        </div>
      </div>
    </form>
</fieldset>

</section>


{{-- VUE code to push the data to websocket --}}
<script>
    new Vue({
      "el": "#app",
      "data": {
          isDisabled:false,
          logIn: false,
          connected: false,
          pusher: null, // something here
          app: null,
          apps: {!! json_encode($apps) !!},
          logChannel: "{{ $logChannel }}",
          authEndpoint: "{{ $authEndpoint }}",
          host: "{{ $host }}",
          port: "{{ $port }}",
          state: null,
          message: null,
          name: {!! json_encode($codename) !!},
          formError: false,
          incomingMessages: [
          ],
      },     
      mounted() {
          this.app = this.apps[0] || null;
          this.pusher = new Pusher("staging", {
                  cluster: "mt1",
                  wsHost: "127.0.0.1",
                  wsPort: "6001",
                  wssPort: this.port,
                  wsPath: this.app.path,
                  disableStats: true,
                  authEndpoint: this.authEndpoint,
                  forceTLS: false,
                  auth: {
                  headers: {
                      "X-CSRF-Token": "{{ csrf_token() }}",
                      "X-App-ID": this.app.id
                  }
                  },
                  enabledTransports: ["ws", "flash"]
              });

              this.pusher.connection.bind('state_change', states => {
                  this.state = states.current
              });

              this.pusher.connection.bind('connected', () => {
                  this.connected = true;
              });

              this.pusher.connection.bind('disconnected', () => {
                  this.connected = false;
              });

              this.pusher.connection.bind('error', event => {
                  this.formError = true;
              });

              this.subscribeToAllChannels();  
   
      },
      methods: {
          subscribeToAllChannels() {
              [
                  "api-message",
              ].forEach(channelName => this.subscribeToChannel(channelName));
          },
          subscribeToChannel(channelName) {
              // var pusher = new Pusher("APP_KEY");
              // private-websockets-dashboard-api-message
              var channel = this.pusher.subscribe(this.logChannel+channelName);
              let inst = this;
              var callback = (data) => {
                  if (data.type === "api-message") {
                      if (data.details.includes("SendMessageEvent")) {
                          // still having issue 
                          let messageData = JSON.parse(data.data);
                          let utcDate = new Date(messageData.time);
                          messageData.time = utcDate.toLocaleString();
                          inst.incomingMessages.push(messageData);
                      }
                      this.scrollToEnd();
                  }

              };

              channel.bind("log-message", callback);  
              
          },
          disconnect() {
          this.connected = false;
          },
          sendMessage() {
            this.formError = false;
            if (this.message === "" || this.message === null) {
                this.formError = true;
            } else {
                $.post("/chat/send", {
                    _token: '{{ csrf_token() }}',
                    message: this.message,
                    name: this.name,
                    time: this.time
                }).fail(() => {
                    alert("Error sending event.")
                });
            }
           this.message = null;
           this.scrollToEnd();     
          },
          scrollToEnd: function() {    	
            var container = this.$el.querySelector(".scrollbar");
            container.scrollTop = container.scrollHeight+30;
            }
      }
      });

</script>