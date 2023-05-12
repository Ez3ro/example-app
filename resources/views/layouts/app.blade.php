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
    <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
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
<body class="streaming_live-container font-family-karla">
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
    </nav>
    <!-- Top Bar Nav -->
   

    <!-- Text Header -->
    
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
                        <img src="{{ asset('assets/media/menu-icons/trophy-01.svg') }}">
                    </span>
                    <span class="sidebar-nav-name"> Transmisiones en vivo </span>
                </a>
            </li>
        </ul>
    </div>

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

    <div class="container mx-auto flex flex-wrap py-6">
       
        
            <div class=" d-flex justify-content-between">
                {{ $slot }}
                <!-- <nav class="card-header-actions">
                    <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                        <i data-feather="minus-circle"></i>
                    </a>
                    <div class="dropdown">
                        <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <a href="#" class="card-header-action">
                        <i data-feather="x-circle"></i>
                    </a>
                </nav> -->
            </div>
        

        <!-- Posts Section -->

        <!-- Sidebar Section -->
        

    </div>
    

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