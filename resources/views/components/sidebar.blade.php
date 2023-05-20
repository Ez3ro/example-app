
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <div class="col-lg-4 top-25 right-0">
        <div class="recommended-panel ">
            <div class="card">
                <div class="card-header"> All Categories </div>
                        <div class="card-wrapper">


            @foreach($categories as $category)
            <div class="recommended-panel">
                <div class="notification-list notification-list--unread">
                    <div class="notification-list_detail">
                <a href="{{ route('by-category', $category ) }}" 
                class="text-semibold block py-2 px-3 rounded {{  request('category')?->slug == $category->slug ? 'bg-blue-600 text-white' : '' }}">
                    {{ $category->title }}  ({{ $category->total }})
                </a>
                </div>
            </div>
            </div>
            @endforeach
                                


        
            
            
                </div>
            </div>
        </div>
    </div>
    
    
