<!DOCTYPE html>
<html lang="en">
  <head>
    <title>streaming_live - The last Admin template you'll ever need</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../resources/views/layouts/dist/css/streaming_live.css" media="screen" />
    <link rel="stylesheet" href="./dist/fontawesome/css/fontawesome.css" media="all">
    <link href="../resources/views/layouts/dist/fontawesome/css/brands.css" rel="stylesheet" media="all">
    <link href="/resources/views/layouts/dist/fontawesome/css/solid.css" rel="stylesheet" media="all">
    /views/layouts/dist/fontawesome/css/solid.css
  </head>

  <body>
    <div class="streaming_live-container">
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="/index.html">
                <img src="./views/layouts/dist/media/images/nacomex-logo.svg" class="navbar-brand-image d-inline-block align-top mr-2" alt="Nacomex">
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
                <li class="nav-item dropdown d-flex align-items-center mr-2">
                    <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
                        <i class="oi oi-bell display-inline-block align-middle"></i>
                        <span class="nav-link-notification-number">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
                        <div class="notifications-header d-flex justify-content-between align-items-center">
                            <span class="notifications-header-title"> Notifications </span>
                            <a href="#" class="d-flex">
                            <small>Mark all as read</small>
                            </a>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action unread">
                                <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>
                                <div class="mb-1">
                                    <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                                </div>
                                <small>1 hour ago</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1">
                                    <strong class="text-success">Goal completed</strong>
                                    <br />1,000 new members today
                                </p>
                                <small>3 days ago</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-danger">
                                    <strong>System error detected</strong>
                                </p>
                                <small>3 days ago</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1">Your task <strong>Design Draft</strong> is due today. </p>
                                <small>4 days ago</small>
                            </a>
                        </div>
                        <div class="notifications-footer text-center">
                            <a href="#">
                                <small>View all notifications</small>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Videos</a>
                        <a class="dropdown-item" href="#">Go Live</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Sign out</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="streaming_live-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="./index.html" class="sidebar-nav-link active">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/home-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Home </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/allsports.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/trophy-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> All Sports </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/badminton.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/badminton-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Badminton </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/baseball.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/baseball-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Baseball </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/boxing.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/boxing-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Boxing </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/esports.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/esports-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> eSports </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/futbol.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/futbol-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Football </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/icehockey.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/ice-hockey-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Ice Hockey </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/volleyball.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <img src="./dist/media/menu-icons/volleyball-01.svg">
                        </span>
                        <span class="sidebar-nav-name"> Volleyball </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar End -->

        <!-- streaming_live-content-aside -->
        <div class="streaming_live-content">
            <!-- <div class="streaming_live-aside"></div> -->
            <div class="streaming_live-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb streaming_live-page-breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Live Streaming</li>
                        </ol>
                    </nav>
                    <div class="pb-3">
                        <h1>Live Streaming Now</h1>
                    </div>
                    <!-- #livestreaming -->
                    <div class="row">
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
                                                    <b>Richard Miles</b>
                                                </p>
                                                <p>
                                                    <small>1M subscribers</small>
                                                </p>
                                            </div>
                                            <div class="live_user1">
                                                <p>
                                                    <i class="fa-solid fa-tower-broadcast"></i> Live
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
                            </div>
                            <div class="card collapse show" id="live_stream_video">
                                <div class="card-body collapse show" id="card1">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls></video>
                                    
                                    <!-- <div class="card-body collapse show" id="card1"><video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop=""></video></div> -->
                                    <div class="card-body">
                                        <div class="card-video-details">
                                            <a href="./layouts/view.html">
                                                <h2 class="live-stream-title" style="color: #000;">MLS All Stars vs Liga MX All Stars Live</h2>
                                            </a>
                                            <p>
                                                <span class="live_date">May 4, 2023</span>
                                                <span class="live-views">19,255 views</span>
                                            </p>
                                            <p class="live-desc">Morocco continue to make history and get their first-ever win over Brazil after defeating them 2-1.</p>
                                            <span class="tags">#morocco #brazil #casemiro</span>
                                            <div class="live_links">
                                                <button type="button" class="live_links1">Link 1</button>
                                                <button type="button" class="live_links2">Link 2</button>
                                                <button type="button" class="live_links3">Link 3</button>
                                                <button type="button" class="live_links4">Link 4</button>
                                            </div>
                                            <div class="social_share">
                                                <a href="#">
                                                    <i class="fa-solid fa-square-share-nodes"></i> Share
                                                </a>
                                                <a href="#">
                                                    <i class="fa-solid fa-square-share-nodes"></i> Share
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="live-stream-slider">
                                <div class="row mx-auto my-auto justify-content-center">
                                    <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="col xl-2 col-lg-3 col-md-4">
                                                    <div class="card" style="background-color: transparent; border: 0;">
                                                        <div class="card-vid">
                                                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                        </div>
                                                        <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <div class="carousel-item">
                                            <div class="col xl-2 col-lg-3 col-md-4">
                                                <div class="card" style="background-color: transparent; border: 0;">
                                                    <div class="card-vid">
                                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                    </div>
                                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col xl-2 col-lg-3 col-md-4">
                                                <div class="card" style="background-color: transparent; border: 0;">
                                                    <div class="card-vid">
                                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                    </div>
                                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col xl-2 col-lg-3 col-md-4">
                                                <div class="card" style="background-color: transparent; border: 0;">
                                                    <div class="card-vid">
                                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                    </div>
                                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col xl-2 col-lg-3 col-md-4">
                                                <div class="card" style="background-color: transparent; border: 0;">
                                                    <div class="card-vid">
                                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                    </div>
                                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col xl-2 col-lg-3 col-md-4">
                                                <div class="card" style="background-color: transparent; border: 0;">
                                                    <div class="card-vid">
                                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                                    </div>
                                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="recommended-panel">
                            <div class="card">
                                <div class="card-header"> Recommended Channels </div>
                                    <div class="card-wrapper">
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body-recommended">
                                            <div class="notification-list notification-list--unread">
                                                <div class="notification-list_img">
                                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                                </div>
                                                <div class="notification-list_detail">
                                                    <p>
                                                        <b>Richard Miles</b>
                                                    </p>
                                                    <p>
                                                        <small>1M subscribers</small>
                                                    </p>
                                                </div>
                                                <div class="notification-list_subscribe-btn">
                                                    <button class="subscribe-btn">
                                                    <i class="fa-solid fa-bell"></i> Subscribe </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn-viewall">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="recent-stream">
        <div class="container-fluid">
            <h2>RECENT STREAM VIDEOS</h2>
            <div class="recent-stream-wrapper">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-vid">
                            <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                            <p class="card-date">May 5, 2021</p>
                            <span class="card-tags">futbol</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center footer-main">
                <a href="index.html">
                    <img src="./dist/media/images/nacomex-logo.svg" alt="nacomex">
                </a>
                <p class="footer-text">© 2023 <a href="index.html">nacomex</a>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/streaming_live.js"></script>
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script><script src="./dist/js/streaming_live.vanilla.js"></script-->
  </body>
</html>