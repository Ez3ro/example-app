<x-app-layout>
    

    
    <div class="streaming_live-content">
        
        <div class="streaming_live-main-content">
            <div class="container-fluid">
                <div class="pb-3">
                    <h1>Live Streaming Now</h1>
                </div>
                 <div class="row">

                    
        @foreach ($posts as $post)

        <x-post-item :post="$post"></x-post-item>
       
       @endforeach
       
        <x-sidebar/>
   
      
       
                </div>
            </div>
        </div>
    </div>






    <section class="recent-stream">
        <div class="container-fluid">
           
    
            <h2>RECENT STREAM VIDEOS</h2>
            <div class="recent-stream-wrapper">
                @foreach ($recents as $recent)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <a href="{{ route('view', $recent) }}"><img src="/storage/{{ $recent->thumbnail }}" width="500"></a>
                            
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
        </div>
    </section>
    
    

    

    <!-- {{ $posts->links() }} -->





    
        
            





</x-app-layout>