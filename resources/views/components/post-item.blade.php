
    
                <div class="card-header d-flex ">
                    <div class="card-header-title">
                        <div class="user1">
                            <div class="user1_pic">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="user1_details">
                                <p>
                                    <b>{{$post->user->name}}</b>
                                </p>
                                <p>
                                    <small>Published on: {{$post->getFormattedDate()}}</small>
                                </p>
                            </div>
                            <div class="live_user1">
                                <p>
                                    <i class="fa-solid fa-tower-broadcast"></i> Live
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
            
            <!-- video -->
            <div class="card collapse show" id="live_stream_video">
                <div class="card-body collapse show" id="card1">
                    <video id="video" width="500" controls poster="/storage/{{$post->thumbnail}}" autoplay="" loop=""></video>
        <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
        <!-- Or if you want a more recent alpha version -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@alpha"></script> -->
        <script>
          var video = document.getElementById("video");
          var videoSrc = "https://nacomex.ngrok.app/hls/{{ $post->streamKey }}.m3u8";
          if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
          }
          // hls.js is not supported on platforms that do not have Media Source
          // Extensions (MSE) enabled.
          //
          // When the browser has built-in HLS support (check using `canPlayType`),
          // we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video
          // element through the `src` property. This is using the built-in support
          // of the plain video element, without using hls.js.
          //
          // Note: it would be more normal to wait on the 'canplay' event below however
          // on Safari (where you are most likely to find built-in HLS support) the
          // video.src URL must be on the user-driven white-list before a 'canplay'
          // event will be emitted; the last video event that can be reliably
          // listened-for when the URL is not on the white-list is 'loadedmetadata'.
          else if (video.canPlayType("application/vnd.apple.mpegurl")) {
            video.src = videoSrc;
          }
        </script>
                    
                    <!-- <div class="card-body collapse show" id="card1"><video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop=""></video></div> -->
                    <div class="card-body">
                        <div class="card-video-details">
                            <a href="{{ route('view', $post) }}">
                                <h2 class="live-stream-title" style="color: #000;">{{$post->title}}</h2>
                            </a>
                            <p>
                                <span class="live_date"> {{$post->getFormattedDate()}}</span>
                                <!--<span class="live-views">19,255 views</span>-->
                            </p>
                            <p class="live-desc">{{$post->shortBody()}}</p>
                            @foreach ($post->categories as $category )
        
                 <span class="tags">#{{$category->title}}</span> 
                    
                  
                @endforeach
                            
                            <div class="social_share">
                                
                                    <i class="fa-solid fa-square-share-nodes"></i> <a href="{{ route('view', $post) }}" class="uppercase text-gray-800 hover:text-black">Watch Live <i class="fas fa-arrow-right"></i></a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end vid -->







        
    <!-- Article Image -->
   
