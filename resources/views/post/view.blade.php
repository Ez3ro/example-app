<x-app-layout>
<div class="container">
    <div class="container-fluid">
        <!-- Post Section -->
        <div class="row">
            <section class="col-9">
                <article class="shadow">
                    <!-- Article Image -->

                    <video id="video" class="w-full"controls poster="/storage/{{$post->thumbnail}}" ></video>
                    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
                    <!-- Or if you want a more recent alpha version -->
                    <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@alpha"></script> -->
                    <script>
                        var srcurl = "https://nacomex.ngrok.app/hls/";
                        var name = "{{ $post->streamKey }}.m3u8";
                        var vdsrc = "https://nacomex.ngrok.app/hls/{{ $post->streamKey }}.m3u8";
                
                      var video = document.getElementById("video");
                      var videoSrc = vdsrc;
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




                    <div class="bg-white flex flex-col justify-start p-6">
                        <span>@foreach ($post->categories as $category )
                        <a href="{{ route('by-category', $category ) }}" class="text-blue-700 text-sm font-bold uppercase pb-4"> #{{$category->title}}</a>
                        @endforeach</span>
                        <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</h1>
                        <p href="#" class="text-sm pb-8">
                            By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->getFormattedDate()}}
                        </p>
                        <div>
                            {!! $post->body !!}
                        </div>
                        
                    </div>
                    <livewire:like-dislike :post="$post"/>
                 
                </article>
                <div class="w-full flex pt-6">
                    <div class="w-1/2">
                    @if($prev)
                    <a href="{{ route('view', $prev) }}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2">{{ $prev->title }}</p>
                    </a>
                    @endif
                </div>
                    <div class="w-1/2">
                    @if($next)
                    <a href="{{ route('view', $next) }}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">{{ $next->title }}</p>
                    </a>
                    @endif
                    </div>
                </div>    
            </section>
            <section class="col-3">
                @include('chat.chat')
            </section>
        </div>
    </div>
</div>
            

</x-app-layout>
