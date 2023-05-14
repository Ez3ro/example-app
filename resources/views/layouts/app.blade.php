<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacomex</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <!-- video.js-->
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/streaming_live.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" media="all">
    <link href="{{ asset('assets/css/brand.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/solid.css') }}" rel="stylesheet" media="all">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    
</head>
<body class="font-family-karla">

    <div class="streaming_live-container">

        <!-- Sidebar -->
    <div class="streaming_live-sidebar expand-hover push">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="/" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <img src="{{ asset('assets/media/menu-icons/home-01.svg') }}">
                    </span>
                    <span class="sidebar-nav-name"> Home </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="{{  url('') }}/category/futbol" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <img src="{{ asset('assets/media/menu-icons/futbol-01.svg') }}">
                    </span>
                    <span class="sidebar-nav-name"> Futbol </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="{{  url('') }}/category/e-sports" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <img src="{{ asset('assets/media/menu-icons/esports-01.svg') }}">
                    </span>
                    <span class="sidebar-nav-name"> E-Sports </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="{{ url('') }}/transmisiones-en-vivo" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                          </svg>
                    </span>
                    <span class="sidebar-nav-name"> Transmisiones en vivo </span>
                </a>
            </li>

            @auth

            <li class="sidebar-nav-item">

                    <a href="{{route('profile.edit')}}" class="sidebar-nav-link active">
                        <span class="sidebar-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" strokeWidth="1.5" stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </span>
                        <span class="sidebar-nav-name">{{ Auth::user()->name }}</span>
                    </a>
            </li>

            <li class="sidebar-nav-item">
                
                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                           <a href="{{ route('logout') }} " class="sidebar-nav-link active"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <span class="sidebar-nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l8.735 8.735m0 0a.374.374 0 11.53.53m-.53-.53l.53.53m0 0L21 21M14.652 9.348a3.75 3.75 0 010 5.304m2.121-7.425a6.75 6.75 0 010 9.546m2.121-11.667c3.808 3.807 3.808 9.98 0 13.788m-9.546-4.242a3.733 3.733 0 01-1.06-2.122m-1.061 4.243a6.75 6.75 0 01-1.625-6.929m-.496 9.05c-3.068-3.067-3.664-7.67-1.79-11.334M12 12h.008v.008H12V12z" />
                                                  </svg>
                                                  
                                            </span>
                                            
                           <span class="sidebar-nav-name"> {{ __('Log Out') }}</span>
                        </a>
                    
                    </form> 
                
            </li>


            

            @else
            <li class="sidebar-nav-item">
                <a href="{{ route('login') }}" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                          </svg>
                          
                    </span>
                    <span class="sidebar-nav-name"> Login </span>
                </a>
            </li>


            <li class="sidebar-nav-item">
                <a href="{{ route('register')}}" class="sidebar-nav-link active">
                    <span class="sidebar-nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M11.47 1.72a.75.75 0 011.06 0l3 3a.75.75 0 01-1.06 1.06l-1.72-1.72V7.5h-1.5V4.06L9.53 5.78a.75.75 0 01-1.06-1.06l3-3zM11.25 7.5V15a.75.75 0 001.5 0V7.5h3.75a3 3 0 013 3v9a3 3 0 01-3 3h-9a3 3 0 01-3-3v-9a3 3 0 013-3h3.75z" />
                          </svg>
                    </span>
                    <span class="sidebar-nav-name"> Register </span>
                </a>
            </li>

            @endauth

        </ul>
    </div>
    <!--nav-->
    
    <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="{{ url('') }}">
            <img src="{{ asset('assets/media/images/nacomex-logo.svg') }}" class="navbar-brand-image d-inline-block align-top mr-2" alt="Nacomex">
        </a>
        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-icon">
                        <i data-feather="search"></i>
                    </div>
                </div>
                <input type="text" class="form-control" id="search" placeholder="Type to search...">
            </div>
        </form>
        <div class="d-flex flex-1 d-block d-md-none">
            <a href="#" class="sidebar-toggle ml-3">
                <i data-feather="menu"></i>
            </a>
            
        </div>
        <ul class="navbar-nav d-flex justify-content-end mr-2">

            <!-- Notificatoins -->
            @auth
            <li class="nav-item d-flex align-items-center mr-2">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a align="right" width="48">
                       
                            <a class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    
                                </div>
                            </a>
                     
    
                      
                        </a>
                </div>
            </li>
            @else

            @endauth
            <!-- Notifications -->
        </ul>
    </nav>
    <!-- Top Bar Nav -->
   

    
    


     <!-- Sidebar End -->

    <!-- Topic Nav 
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="/" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Home</a>
                <a href="{{  url('') }}/transmisiones-en-vivo" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">transmisiones en vivo</a>
                <a href="{{  url('') }}/category/futbol" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Futbol</a>
                <a href="{{  url('') }}/category/egames" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Egames</a>
                <a href="https://golasazo.com" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">News</a>
            </div>
        </div>
    </nav>
        -->
        
    
    </div>
        
    {{  $slot  }}
            
                
                
        
    
    

    <footer>
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center footer-main">
                <a href="index.html">
                    <img src="{{ asset('assets/media/images/nacomex-logo.svg') }}" alt="nacomex">
                </a>
                <p class="footer-text">© 2023 <a href="index.html">nacomex</a>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src=" {{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/streaming_live.js') }}"></script>
   
    
</body>
</html>