<x-app-layout>
    
<section class="w-full flex flex-col px-3">
    <div class="">
        <h1>Live Streaming Now</h1>
    </div>
    <article class=" flex-col shadow my-5">
        @foreach ($posts as $post)

        <x-post-item :post="$post"></x-post-item>
       
       @endforeach
    </article>

    

    <!-- {{ $posts->links() }} -->



<div class="container-fluid row mx-auto my-auto justify-content-center recent-stream">
    <h2 class="py-3 my-5">RECENT STREAM VIDEOS</h2>
    <div class="recent-stream-wrapper">
        @foreach ($recents as $recent)
        <div class="col-md-4">
            
            <div class="card">
                <div class="card-vid">
                    <a href="{{ route('view', $recent) }}"><video id="video" poster="/storage/{{ $recent->thumbnail }}" class="card-img-top"></video></a>
                    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
                    <!-- Or if you want a more recent alpha version -->
                    <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@alpha"></script> -->
                    <script>
                      var video = document.getElementById("video");
                      var videoSrc = "https://nacomex.ngrok.app/hls/{{ $recent->streamKey }}.m3u8";
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
                    
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $recent->title }}</h5>
                    <p class="card-date">{{$recent->getFormattedDate()}}</p>
                    <span class="">@foreach ($recent->categories as $category )
        
                        <span class="card-tags">#{{$category->title}}</span> 
                           
                         
                       @endforeach</span>
                </div>
            </div>
            
        </div>
        @endforeach
        
        
    </div>
</div>

    
        
            
</section>



<x-sidebar/>
</x-app-layout>