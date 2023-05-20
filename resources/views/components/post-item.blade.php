
    
                 <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
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
                    </div>
                
            
            
            <!-- video -->
            <div class="card" id="live_stream_video">

                <div class="card-body" id="card1">
                    <a href="{{ route('view', $post) }}"><img   src="/storage/{{$post->thumbnail}}" width="600" alt="{{ $post->title }}"></a>
                    
                
                    
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
                <div class="live_links">
                    <button type="button" class="live_links1"> <a href="{{ route('view', $post) }}" class="uppercase text-gray-800 hover:text-black">Watch Live <i class="fas fa-arrow-right"></i></a></button>
                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                 </div>
            <!-- end vid -->







        
    <!-- Article Image -->
   
