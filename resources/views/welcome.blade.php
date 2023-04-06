<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourism Nagaland</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="position-relative">

        <!-- Header Social and Login Sections -->
        <header class="contact pt-1 pb-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <p class="mb-0">Connect with us</p>
                                <i class="fa-brands fa-facebook" style="color: #1877f2; font-size: 22px;"></i>
                                <i class="fa-brands fa-instagram" style="color: #e1306c; font-size: 22px;"></i>
                                <i class="fa-brands fa-twitter" style="color: #1da1f2; font-size: 22px;"></i>
                                <i class="fa-brands fa-youtube" style="color: #ff0000; font-size: 22px;"></i>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <a href="{{url('login')}}">
                                    <i class="fa-regular fa-lock-keyhole"></i>
                                    @if(Auth::User())
                                    <span>Dashboard</span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <span class="text-danger">Log Out</span>
                                        </x-dropdown-link>
                                    </form>
                                    @else
                                    <span>Login</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header Social and Login Sections -->

        <!-- Slider, Nav Bar and News Section -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('/img/logo.svg')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nagaland Offroad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('destination') ? 'active' : '' }}" href="{{Route('destination')}}">Destinations</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Accomodations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ Route::is('Hotels') ? 'active' : '' }}" href="{{Route('Hotels')}}">Hotels</a></li>
                                <li><a class="dropdown-item {{ Route::is('Homestay') ? 'active' : '' }}" href="{{Route('Homestay')}}">Homestay</a></li>
                                <li><a class="dropdown-item {{ Route::is('TravelOperators') ? 'active' : '' }}" href="{{Route('TravelOperators')}}">Travel Operators</a></li>
                                <li><a class="dropdown-item {{ Route::is('RegisteredGuide') ? 'active' : '' }}" href="{{Route('RegisteredGuide')}}">Registered Guide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>&nbsp;Search</a>
                        </li> -->
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
        <div class="slider-wrapper position-relative">
            <!-- Carousel -->
            <div id="carouselImageSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselImageSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselImageSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselImageSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-overlay">
                            <img src="{{asset('img/pic-1.webp')}}" class="d-block w-100" alt="Slider Image 1">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="head-title">Stalingrad of the East</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque provident, qui quis rem consequuntur numquam cum adipisci neque modi vitae dolor commodi itaque praesentium corporis perspiciatis quo placeat voluptatibus aspernatur?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-overlay">
                            <img src="{{asset('img/pic-2.jpg')}}" class="d-block w-100" alt="Slider Image 2">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="head-title">Stalingrad of the East</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque provident, qui quis rem consequuntur numquam cum adipisci neque modi vitae dolor commodi itaque praesentium corporis perspiciatis quo placeat voluptatibus aspernatur?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-overlay">
                            <img src="{{asset('img/pic-1.webp')}}" class="d-block w-100" alt="Slider Image 3">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="head-title">Stalingrad of the East</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque provident, qui quis rem consequuntur numquam cum adipisci neque modi vitae dolor commodi itaque praesentium corporis perspiciatis quo placeat voluptatibus aspernatur?</p>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselImageSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselImageSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
            <!-- End of Carousel -->

            <!-- News Section -->
            <div class="news-section">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-2 col-xxl-1 d-flex align-items-center justiy-content-center border-left">
                                <span class="card-text">
                                    News
                                </span>
                            </div>
                            <div class="col-12 col-md-10 col-xxl-11 align-self-center">
                                <div id="carouselNewsSlider" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde?</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde?</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, unde?</p>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewsSlider" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNewsSlider" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of News Section -->
        </div>
        <!-- End of Slider, Nav Bar and News section -->
    </div>
    <!-- About Section -->
    <div class="about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-1 d-flex align-items-center order-last order-lg-first">
                    <ul class="slide_navigation position-relative" id="slider-menu">
                        <li class="link active" data-scroll="slide_1"><a data-scroll="slide_1" href="#slide_1" class="dot"></a></li>
                        <li class="link" data-scroll="slide_2"><a data-scroll="slide_2" href="#slide_2" class="dot"></a></li>
                        <li class="link" data-scroll="slide_3"><a data-scroll="slide_3" href="#slide_3" class="dot"></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5 order-first order-lg-first">
                    <div class="d-flex">
                        <div class="image-wrapper d-flex">
                            <div class="image">
                                <img src="{{asset('img/about_1.png')}}" alt="">
                            </div>
                            <div class="image">
                                <img src="{{asset('img/about_2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="scroll-warpper">
                        <section class="slider">
                            <div class="slides">
                                <div id="slide_1" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">About Nagaland</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a class="more-btn" href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div id="slide_2" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">Entry Permits</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a class="more-btn" href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div id="slide_3" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">How to get there</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a class="more-btn" href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emd of About Section -->

    <!-- Where to visit section -->
    <div class="visit-wrapper">
        <div class="container">
            <div class="row g-4 visit-section">
                <div class="col-12 col-lg-4 d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <h1 class="head-title">Where to visit now</h1>
                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($destination AS $destiny)
                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img class="hover" src="{{ url('storage/'."$destiny->image") }}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{url('destination-details')}}/{{$destiny->id}}">
                                                <h6>
                                                    {{Str::limit($destiny->header, 30)}}
                                                </h6>
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                            </a>

                                        </div>
                                        <p class="mb-0 main-text">
                                            {{Str::limit($destiny->description, 30)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 things-section g-4">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="head-title">Things to do</h1>
                        <a class="more-btn" href="#">
                            See more
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap flex-xxl-nowrap">
                        <div class="card h-100">
                            <img class="hover" src="{{asset('img/things_1.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Offroading
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img class="hover" src="{{asset('img/things_2.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Trekking
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img class="hover" src="{{asset('img/things_3.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Bike Rides
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img class="hover" src="{{asset('img/things_4.jpeg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Camping
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img class="hover" src="{{asset('img/things_5.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Cycling
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Where to visit section -->

    <!-- Upcomming Events -->
    <div class="events-wrapper">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="head-title">Upcomming Events</h1>
                </div>
            </div>
            <div class="row mb-4 event-card-wrapper">
                <!-- <div class="col-12 event-inside-column">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-12 col-lg-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <a class="more-btn" href="#">
                                                See more
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                @foreach($events AS $event)
                <div class="col-12 event-inside-column">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-3">
                                            <img class="event-pic" src="{{ url('storage/'."$event->event_image_main") }}" alt="Events Pic">
                                        </div>
                                        <div class="col-12 col-lg-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>{{$event->event_title}}</h6>
                                                <p class="mb-0 main-text">
                                                {{Str::limit($event->event_description, 100)}}

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>{{$event->event_date}}</h6>
                                            <p class="mb-0 main-text">Event Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>{{$event->created_at->toDateString()}}</h6>
                                            <p class="mb-0 main-text">Uploaded Date</p>
                                        </div>
                                        <!-- <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div> -->
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <a class="more-btn" href="{{url('event-details')}}/{{$event->id}}">
                                                See more
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-12 event-inside-column">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-12 col-lg-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <a class="more-btn" href="#">
                                                See more
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 event-inside-column">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-12 col-lg-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                                            <a class="more-btn" href="#">
                                                See more
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="more-btn" href="{{Route('events')}}">
                            View all
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Upcomming Events -->
    <!-- Video and Blog Section -->
    <div class="video-blog-wrapper">

        <div class="video-wrapper">
            <video class="video-nagaland" onpause="videoPlay(0)">
                <!-- <source src="{{asset('video/nagaland.mp4')}}" type="video/mp4"> -->
                <!-- <source src="{{asset('video/nagaland.webm')}}" type="video/webm"> -->
            </video>
            <div class="video-overlay d-block">
                <div class="container d-flex align-items-center justify-content-between flex-column flex-md-row">
                    <button type="button" class="btn video-play-btn" onclick="videoPlay(1)">
                        <i class="fa-solid fa-play" style="font-size: 28px;"></i>
                    </button>
                    <div class="video-text">
                        <p class="video-head-text">Best place to visit</p>
                        <p class="main-text">If tropical jungle, slush & mud, remote mud tracks, forgotten hamlets - truly back of beyond countryside excites you, then join us on this exciting, tough, yet hugely insightful drive on tracks and trails in the hinterland of Naga Land Besides the sheer geography and road, this land is also home to many forgotten tribes, quaint folk culture, exotic cuisine and more</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bird-wrapper">
            <!-- <img src="{{asset('img/nagaland-bird.svg')}}" alt="Hornbill Bird"> -->
            <svg id="hornbill" class="w-100 d-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 261.48 205.97">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #3d242a;
                        }

                        .cls-2 {
                            fill: #fff;
                        }

                        .cls-3 {
                            fill: url(#Degradado_sin_nombre_134);
                        }

                        .cls-4 {
                            fill: url(#Degradado_sin_nombre_97);
                        }

                        .cls-5 {
                            fill: url(#Degradado_sin_nombre_97-2);
                        }

                        .cls-6 {
                            fill: url(#Degradado_sin_nombre_134-2);
                        }

                        .cls-7 {
                            fill: url(#Degradado_sin_nombre_45);
                        }

                        .cls-8 {
                            fill: url(#Degradado_sin_nombre_80);
                        }

                        .cls-9 {
                            fill: url(#Degradado_sin_nombre_134-3);
                        }

                        .cls-10 {
                            fill: url(#Degradado_sin_nombre_97-3);
                        }

                        .cls-11 {
                            fill: url(#Degradado_sin_nombre_94);
                        }

                        .cls-12 {
                            fill: url(#Degradado_sin_nombre_45-2);
                        }

                        .cls-13 {
                            fill: url(#Degradado_sin_nombre_94-2);
                        }

                        .cls-14 {
                            fill: url(#Degradado_sin_nombre_134-4);
                        }

                        .cls-15 {
                            fill: url(#Degradado_sin_nombre_94-3);
                        }

                        .cls-16 {
                            fill: url(#Degradado_sin_nombre_134-5);
                        }

                        .cls-17 {
                            fill: url(#Degradado_sin_nombre_94-4);
                        }

                        .cls-18 {
                            fill: url(#Degradado_sin_nombre_41);
                        }

                        .cls-19 {
                            fill: url(#Degradado_sin_nombre_41-2);
                        }

                        .cls-20 {
                            fill: url(#Degradado_sin_nombre_134-6);
                        }

                        .cls-21 {
                            fill: url(#Degradado_sin_nombre_134-7);
                        }

                        .cls-22 {
                            fill: url(#Degradado_sin_nombre_94-5);
                        }

                        .cls-23 {
                            fill: url(#Degradado_sin_nombre_134-8);
                        }

                        .cls-24 {
                            fill: url(#Degradado_sin_nombre_41-3);
                        }

                        .cls-25 {
                            fill: url(#Degradado_sin_nombre_134-9);
                        }

                        .cls-26 {
                            fill: url(#Degradado_sin_nombre_40);
                        }

                        .cls-27 {
                            fill: url(#Degradado_sin_nombre_40-2);
                        }

                        .cls-28 {
                            fill: url(#Degradado_sin_nombre_40-3);
                        }

                        .cls-29 {
                            fill: url(#Degradado_sin_nombre_40-4);
                        }

                        .cls-30 {
                            fill: url(#Degradado_sin_nombre_137);
                        }

                        .cls-31 {
                            fill: url(#Degradado_sin_nombre_97-4);
                        }

                        .cls-32 {
                            fill: url(#Degradado_sin_nombre_40-5);
                        }

                        .cls-33 {
                            fill: url(#Degradado_sin_nombre_97-5);
                        }

                        .cls-34 {
                            fill: url(#Degradado_sin_nombre_97-6);
                        }

                        .cls-35 {
                            fill: url(#Degradado_sin_nombre_97-7);
                        }
                    </style>
                    <linearGradient id="Degradado_sin_nombre_134" x1="1319.98" y1="76.33" x2="1218.55" y2="122.98" gradientTransform="matrix(-0.99, 0.15, 0.15, 0.99, 1317.89, -257.38)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#27243e" />
                        <stop offset="1" stop-color="#2b73b4" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_97" x1="1250.24" y1="95.3" x2="1331.74" y2="95.3" gradientTransform="matrix(-0.99, 0.15, 0.15, 0.99, 1317.89, -257.38)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffc850" />
                        <stop offset="1" stop-color="#f95500" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_97-2" x1="1241.99" y1="82.09" x2="1308.36" y2="82.09" xlink:href="#Degradado_sin_nombre_97" />
                    <linearGradient id="Degradado_sin_nombre_134-2" x1="1319.95" y1="76.27" x2="1218.52" y2="122.92" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_45" x1="1268.06" y1="209.92" x2="1248.19" y2="196.98" gradientTransform="matrix(-0.99, 0.15, 0.15, 0.99, 1317.89, -257.38)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#26e7e0" />
                        <stop offset="1" stop-color="#272d7d" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_80" x1="1242.92" y1="97.27" x2="1242.62" y2="150.24" gradientTransform="matrix(-0.99, 0.15, 0.15, 0.99, 1317.89, -257.38)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#9cdce0" />
                        <stop offset="1" stop-color="#f5f5f6" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_134-3" x1="1312.39" y1="59.83" x2="1210.96" y2="106.48" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_97-3" x1="1229.09" y1="93.22" x2="1245.31" y2="93.22" xlink:href="#Degradado_sin_nombre_97" />
                    <linearGradient id="Degradado_sin_nombre_94" x1="1233.37" y1="96.22" x2="1242.15" y2="96.22" gradientTransform="matrix(-0.99, 0.15, 0.15, 0.99, 1317.89, -257.38)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#621e7d" />
                        <stop offset="1" stop-color="#00afc5" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_45-2" x1="1178.37" y1="150.29" x2="1250.81" y2="150.29" xlink:href="#Degradado_sin_nombre_45" />
                    <linearGradient id="Degradado_sin_nombre_94-2" x1="747.28" y1="67.95" x2="644.57" y2="156.08" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_94" />
                    <linearGradient id="Degradado_sin_nombre_134-4" x1="1142.51" y1="167.06" x2="1175.91" y2="210.1" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_94-3" x1="764.24" y1="87.72" x2="661.53" y2="175.86" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_94" />
                    <linearGradient id="Degradado_sin_nombre_134-5" x1="1157.74" y1="183.39" x2="1188.74" y2="229.14" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_94-4" x1="765.58" y1="89.28" x2="662.87" y2="177.42" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_94" />
                    <linearGradient id="Degradado_sin_nombre_41" x1="687.86" y1="135.98" x2="702.7" y2="135.98" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#1c1c38" />
                        <stop offset="0.51" stop-color="#2b73b4" />
                        <stop offset="1" stop-color="#26e7e0" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_41-2" x1="664.89" y1="173.32" x2="693.39" y2="173.32" xlink:href="#Degradado_sin_nombre_41" />
                    <linearGradient id="Degradado_sin_nombre_134-6" x1="1159.44" y1="182.24" x2="1190.44" y2="227.99" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_134-7" x1="1150.98" y1="160.48" x2="1184.39" y2="203.52" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_94-5" x1="1178.24" y1="208.98" x2="1165.9" y2="242.69" xlink:href="#Degradado_sin_nombre_94" />
                    <linearGradient id="Degradado_sin_nombre_134-8" x1="1175.04" y1="230.59" x2="1161.19" y2="303.13" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_41-3" x1="649.78" y1="174.4" x2="678.02" y2="174.4" xlink:href="#Degradado_sin_nombre_41" />
                    <linearGradient id="Degradado_sin_nombre_134-9" x1="1156.77" y1="227.1" x2="1142.92" y2="299.64" xlink:href="#Degradado_sin_nombre_134" />
                    <linearGradient id="Degradado_sin_nombre_40" x1="597.28" y1="168.76" x2="771.07" y2="177.83" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#531919" />
                        <stop offset="0.51" stop-color="#6b2929" />
                        <stop offset="1" stop-color="#981e40" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_40-2" x1="722.15" y1="155.84" x2="712.21" y2="153.99" xlink:href="#Degradado_sin_nombre_40" />
                    <linearGradient id="Degradado_sin_nombre_40-3" x1="600.98" y1="97.79" x2="774.77" y2="106.85" xlink:href="#Degradado_sin_nombre_40" />
                    <linearGradient id="Degradado_sin_nombre_40-4" x1="744.25" y1="158.36" x2="734.73" y2="156.58" xlink:href="#Degradado_sin_nombre_40" />
                    <linearGradient id="Degradado_sin_nombre_137" x1="738.79" y1="173.37" x2="739.41" y2="147.59" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#f95500" />
                        <stop offset="1" stop-color="#ffc850" />
                    </linearGradient>
                    <linearGradient id="Degradado_sin_nombre_97-4" x1="726.87" y1="153.81" x2="746.34" y2="153.81" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_97" />
                    <linearGradient id="Degradado_sin_nombre_40-5" x1="625.03" y1="125.66" x2="762.25" y2="132.82" xlink:href="#Degradado_sin_nombre_40" />
                    <linearGradient id="Degradado_sin_nombre_97-5" x1="697.23" y1="153.54" x2="723.58" y2="153.54" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_97" />
                    <linearGradient id="Degradado_sin_nombre_97-6" x1="1203.33" y1="234.2" x2="1215.69" y2="234.2" xlink:href="#Degradado_sin_nombre_97" />
                    <linearGradient id="Degradado_sin_nombre_97-7" x1="704.33" y1="162.98" x2="711.97" y2="164.15" gradientTransform="matrix(-1, 0, 0, 1, 877.11, 0)" xlink:href="#Degradado_sin_nombre_97" />
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <path class="cls-1" d="M108.58,22.33a2.24,2.24,0,1,0,2.55,1.88q0-.11,0-.18a1.43,1.43,0,0,1-.67.28A1.54,1.54,0,0,1,108.68,23a1.46,1.46,0,0,1,0-.69Z" />
                        <path class="cls-2" d="M108.73,22.31a1.46,1.46,0,0,0,0,.69,1.54,1.54,0,0,0,1.75,1.31,1.43,1.43,0,0,0,.67-.28A2.23,2.23,0,0,0,108.73,22.31Z" />
                        <path class="cls-2" d="M110,21.23a1.52,1.52,0,0,0-1.23,1.08A2.23,2.23,0,0,1,111.1,24a1.56,1.56,0,0,0-1.14-2.8Z" />
                        <path class="cls-3" d="M14.46,29.17a88.7,88.7,0,0,1,26.3-6.36s6.56-1.44,4.26-8.5-10.56-9-10.56-9C17.37,13.67,14.46,29.17,14.46,29.17Z" />
                        <path class="cls-4" d="M40.76,22.81a88.7,88.7,0,0,0-26.3,6.36C33.28,26.42,66.16,35.91,78,39.62c4.48-.94,6.41-3.51,9.94-7,3.22-3.18,8.31-2.34,9.19-2.16-9.67-3.77-26.59-6-44.18-7.63A69.6,69.6,0,0,0,40.76,22.81Z" />
                        <path class="cls-5" d="M34.46,5.27s8.27,2,10.56,9-4.26,8.5-4.26,8.5a69.6,69.6,0,0,1,12.16,0c17.59,1.65,34.51,3.86,44.18,7.63l.12,0c-3.54-8.23,1.17-16,3.73-18.12a3.1,3.1,0,0,0,.61-4.5h0C68.05-3.34,47.27-1,34.46,5.27Z" />
                        <path class="cls-6" d="M78,39.62c2.76.87,4.37,1.42,4.37,1.42,1.34,1,4.33,1.33,7.6.92,5.55-.68,11.94-3.48,12.58-8.64a22.48,22.48,0,0,0-5.42-2.85c-.88-.18-6-1-9.19,2.16C84.38,36.11,82.45,38.68,78,39.62Z" />
                        <path class="cls-7" d="M95.85,81s-5.24,6.38,2.28,19.8C104.22,111.71,125.38,132,144,142a2.36,2.36,0,0,0,1-2.22s4.3-.61,5.28,5.23q2.2.93,4.29,1.59a13.31,13.31,0,0,1,7.18-3.75h0c.49-.31,1-.6,1.53-.89l-.79,0c-39.07-13.93-57.9-58.92-57.9-58.92-2.93,1.22-5.46,1.46-7,.06A10.52,10.52,0,0,1,95.86,81Z" />
                        <path class="cls-8" d="M96.71,57.42C95.26,69.19,92.75,76,95.86,81a10.52,10.52,0,0,0,1.74,2.12c1.49,1.4,4,1.16,7-.06,8.14-3.43,19.27-14.51,19-19.28-.32-6.5,3.38-28.69-5.63-34.41-.26,1.61-6.41.17-9.67,1.47s-4.66,3.28-5.77,2.44c-.64,5.16-7,8-12.58,8.64h0S98.39,43.92,96.71,57.42Z" />
                        <path class="cls-9" d="M101,12.37c-2.56,2.16-7.27,9.89-3.73,18.12l-.12,0a22.48,22.48,0,0,1,5.42,2.85,7.55,7.55,0,0,0-.14-2.65c-2.35-10.37-.1-10.11,1.31-14.35a15.78,15.78,0,0,0,.79-5.41,11.44,11.44,0,0,0-.27-2.14l-2.65-.9A3.1,3.1,0,0,1,101,12.37Z" />
                        <path class="cls-10" d="M104.48,10.91h.08s8.77,7.07,10.81,8.45,2.85,8.45,2.59,10.06-6.41.17-9.67,1.47-4.66,3.28-5.77,2.44a7.55,7.55,0,0,0-.14-2.65c-2.35-10.37-.1-10.11,1.31-14.35A15.78,15.78,0,0,0,104.48,10.91Zm5,17.92a4.39,4.39,0,1,0-5-3.68A4.39,4.39,0,0,0,109.48,28.83Z" />
                        <path class="cls-11" d="M113.15,23.82a4.39,4.39,0,1,1-5-3.67A4.39,4.39,0,0,1,113.15,23.82Zm-3.9,2.94a2.24,2.24,0,0,0,1.88-2.55q0-.11,0-.18a1.56,1.56,0,0,0-1.14-2.8,1.52,1.52,0,0,0-1.23,1.08l-.15,0a2.24,2.24,0,0,0,.67,4.43Z" />
                        <path class="cls-12" d="M104.55,83.1s18.83,45,57.9,58.92l.79,0A65.1,65.1,0,0,1,175,137.36s-2.65-1,3-7.15c-3.36-2-6.58-4-9.43-6-40.79-25.43-45-41.89-43.53-49.88A11,11,0,0,1,130.35,67c18.18-10.67,35.3,2.81,44.37,14.89a17.25,17.25,0,0,1,3.1,1.1c-12.18-20.9-38.69-27.35-38.69-27.35s-1.78-17.94-9.7-34.25S104.21,8.77,104.21,8.77a11.44,11.44,0,0,1,.27,2.14h.08s8.77,7.07,10.81,8.45,2.85,8.45,2.59,10.06c9,5.72,5.31,27.91,5.63,34.41C123.82,68.59,112.69,79.67,104.55,83.1Z" />
                        <path class="cls-13" d="M125,74.36c-1.52,8,2.74,24.45,43.53,49.88,0,0,10.37-6.84,3-12.18-6.75-4.9-8.06-6-8.23-6.18l0,0s11.4-1,16.13-5.73a6.14,6.14,0,0,0,1.86-6,15,15,0,0,0-.88-2.63,46.34,46.34,0,0,0-5.72-9.59C165.65,69.83,148.53,56.35,130.35,67A11,11,0,0,0,125,74.36Z" />
                        <path class="cls-14" d="M163.33,105.86l0,0c1,.67,33.63,22.5,48.2,42.65a92.29,92.29,0,0,0-6.64-17.14c-10.42-20.59-25.21-31-25.21-31l-.24-.28C174.73,104.85,163.33,105.86,163.33,105.86Z" />
                        <path class="cls-15" d="M169.09,143.61h0c.38.07,10.58,1.92,15.14.87-.34-2.27-.52-3.61-.52-3.61a5.5,5.5,0,0,1-2.84.87,1.51,1.51,0,0,1-1-.4Z" />
                        <path class="cls-16" d="M163.35,105.88c.17.15,1.48,1.28,8.23,6.18,7.36,5.34-3,12.18-3,12.18,2.85,1.94,6.07,4,9.43,6,3.68,2.22,7.53,4.42,11.25,6.5,4.86,2.71,9.5,5.19,13.28,7.18,2.69,1.41,4.94,2.56,6.52,3.37s2.5,1.27,2.5,1.27C197,128.38,164.36,106.55,163.35,105.88Z" />
                        <path class="cls-17" d="M169.1,143.61c2.8,1.12,4,5.71,4,5.71s8,1.53,12,1c-.38-2.29-.69-4.26-.92-5.79C179.68,145.53,169.48,143.68,169.1,143.61Z" />
                        <path class="cls-18" d="M178,130.21c-5.62,6.14-3,7.15-3,7.15,4.91-.12,3.72,2.87,4.86,4a1.51,1.51,0,0,0,1,.4,5.5,5.5,0,0,0,2.84-.87,32,32,0,0,0,5.53-4.16C185.53,134.63,181.68,132.43,178,130.21Z" />
                        <path class="cls-19" d="M185.16,150.27c2.58,15.8,8.47,46.63,15.88,53,4.4,3.82,9.2,3.29,11.18-2.39-15.91,16.48-24.07-55.72-24.07-55.72a17.24,17.24,0,0,1-4.43-4.33s.18,1.34.52,3.61C184.47,146,184.78,148,185.16,150.27Z" />
                        <path class="cls-20" d="M179.46,100.13l.24.28s14.79,10.39,25.21,31a67.34,67.34,0,0,0-2-8.85c-6.52-21.81-22-31.24-22-31.24l-.47.2a15,15,0,0,1,.88,2.63A6.14,6.14,0,0,1,179.46,100.13Z" />
                        <path class="cls-21" d="M177.82,83a17.25,17.25,0,0,0-3.1-1.1,46.34,46.34,0,0,1,5.72,9.59l.47-.2s15.49,9.43,22,31.24l.61-.19C197.74,94.87,184,85.78,177.82,83Z" />
                        <path class="cls-22" d="M183.72,140.87a17.24,17.24,0,0,0,4.43,4.33,88.92,88.92,0,0,0,10.94,6.65,17.6,17.6,0,0,0,3.36-6.41,3.42,3.42,0,0,0,.08-1.55c-3.78-2-8.42-4.47-13.28-7.18A32,32,0,0,1,183.72,140.87Z" />
                        <path class="cls-23" d="M188.15,145.2s8.16,72.2,24.07,55.72h0a21.11,21.11,0,0,0,.91-7.41c-.23-8.75-4-22.4-14-41.66A88.92,88.92,0,0,1,188.15,145.2Z" />
                        <path class="cls-24" d="M202.45,145.44a17.6,17.6,0,0,1-3.36,6.41c10,19.26,13.82,32.91,14,41.66h.31c3.29,6.76,7.66,9.76,11.42,9.87C236.62,177.39,202.45,145.44,202.45,145.44Z" />
                        <path class="cls-25" d="M202.53,143.89a3.42,3.42,0,0,1-.08,1.55s34.17,31.95,22.42,57.93c6.2.19,10.77-7.44,6.34-19.07-7.11-18.71-22.16-37-22.16-37C207.47,146.45,205.22,145.3,202.53,143.89Z" />
                        <path class="cls-26" d="M48.87,195.81a64.07,64.07,0,0,0,37.84,3.31c12.55-2.77,35.78-20.71,44.52-30.14,0,12.68-19,29.57-25.39,37h0c6.25-4.79,13.39-9.21,18-15.61,4.95-6.81,9.76-13.83,16.06-19.42,1.06-.94,2.17-1.84,3.32-2.68a36.22,36.22,0,0,1,11.38-5.7,15.35,15.35,0,0,1,1.49-14.26c-2.07,0-4.15,0-6.22,0h0c-2.06,0-4.11-.13-6.16-.24l-2.64-.17-.07,0c-2.09.91-7.06,8.63-.65,14.34l2.35.15.31,0c-.49,1.91-1.27,4.11-2.46,5.3-1,1-2.27,1.27-3.88.1a8.82,8.82,0,0,1-.86-.73,16.33,16.33,0,0,1-4.5-7.51c-6.42,4.51-11,11.56-16.39,17.39a62.53,62.53,0,0,1-30.16,17.82c-11.48,2.9-24.68,4.77-35.91,1Z" />
                        <path class="cls-27" d="M154.63,162.56c.56-.17,1.12-.31,1.68-.43l2.95.24a7.48,7.48,0,0,0-.7-4.63c-1.49-2.78-.31-7.37,1.76-8.4a16.71,16.71,0,0,1,3.8-1.33c-2.67.16-5.33.26-8,.29A15.35,15.35,0,0,0,154.63,162.56Z" />
                        <path class="cls-28" d="M0,148.1H0c22.13-15.08,51.78-10.82,77.92-4.92,17.85,4,35.27,10.17,53,14.49a20.83,20.83,0,0,1,1.53-10.59q-5.4-.62-10.74-1.51c-5.36-.91-10.71-2-16-3.15l0-.19c-9.67-4-16.23-13.18-20.54-22.71S78.26,99.74,73.53,90.41c-8.07-15.89-23.26-26.21-40-32.27h0a62.86,62.86,0,0,1,28.4,22.6,30.36,30.36,0,0,0-23.55-7.45c-8.43,1-15,7-19.77,14h0a30.11,30.11,0,0,1,24.61-9.79A30.16,30.16,0,0,1,66.31,92.3c2.9,5.08,4.22,10.9,5.36,16.63s2.13,11.58,4.45,17c2.24,5.16,5.91,9.94,11,12.38A234,234,0,0,0,59.3,133.7C38.52,131.81,16.13,135,0,148.1Z" />
                        <path class="cls-29" d="M133.29,158.23l.11,0-.1.06c-.68.39-1.33.82-2,1.26a16.33,16.33,0,0,0,4.5,7.51,8.82,8.82,0,0,0,.86.73,2.83,2.83,0,0,0,3,.53,3.55,3.55,0,0,0,.87-.63c1.19-1.19,2-3.39,2.46-5.3l-.31,0-2.35-.15c-6.41-5.71-1.44-13.43.65-14.34l.07,0c-1.29-.09-2.57-.19-3.85-.31-.6-.05-1.2-.1-1.79-.17-1-.09-2-.2-3-.31h0a20.83,20.83,0,0,0-1.53,10.59l2.34.56Z" />
                        <path class="cls-30" d="M133.28,158.23h0a.28.28,0,0,0,0,.09,39.81,39.81,0,0,0,3.39,9.5c1.61,1.17,2.89.88,3.88-.1,1.19-1.19,2-3.39,2.46-5.3l-.31,0s-3.2,4.91-5.65.87c-2-3.38-4.38-10.34.17-15.69a13.87,13.87,0,0,1,3.58-2.95,9.6,9.6,0,0,0-5.37,2.78C133.59,149.35,132.21,152.66,133.28,158.23Z" />
                        <path class="cls-31" d="M130.94,157.67a18.48,18.48,0,0,0,.39,1.91,16.33,16.33,0,0,0,4.5,7.51,8.82,8.82,0,0,0,.86.73,39.81,39.81,0,0,1-3.39-9.5.28.28,0,0,1,0-.09h0c-1.07-5.57.31-8.88,2.17-10.84a9.6,9.6,0,0,1,5.37-2.78,13.87,13.87,0,0,0-3.58,2.95c-4.55,5.35-2.2,12.31-.17,15.69,2.45,4,5.65-.87,5.65-.87l-2.35-.15c-6.41-5.71-1.44-13.43.65-14.34l.07,0a3.75,3.75,0,0,1,2.64.17c2.05.11,4.1.2,6.16.24-.61-.78-1.23-1.55-1.23-1.55l1.58-1.68c-1-5.84-5.28-5.24-5.28-5.24a2.37,2.37,0,0,1-1,2.23,2.89,2.89,0,0,1-1.93.15c-3.25-.68-7.54.18-9.38,4.37-.08.17-.15.34-.22.52h0A20.83,20.83,0,0,0,130.94,157.67Z" />
                        <path class="cls-32" d="M261.48,92.38l-3.09,4.87C245,118.64,223,134,198.91,141.65a138.62,138.62,0,0,1-26.56,5.63c-1.43.17-2.87.31-4.31.44s-2.61.21-3.92.29a16.71,16.71,0,0,0-3.8,1.33c-2.07,1-3.25,5.62-1.76,8.4a7.48,7.48,0,0,1,.7,4.63q4.53.31,9.05.3,2.2,0,4.41-.09a137.85,137.85,0,0,0,88.76-37.18Z" />
                        <path class="cls-33" d="M154.63,162.56a16.89,16.89,0,0,0,.93,2.12c1.43,2.8,2.71,4.13,3.77,4.69a2.42,2.42,0,0,0,3.07-.45s-2.64.25-3.09-3.18a16.06,16.06,0,0,1-.05-3.37,7.48,7.48,0,0,0-.7-4.63c-1.49-2.78-.31-7.37,1.76-8.4a16.71,16.71,0,0,1,3.8-1.33,13.06,13.06,0,0,1,3.92-.29c1.44-.13,2.88-.27,4.31-.44a7,7,0,0,0-3.25-3.67l10.79-2.27c-1.14-1.11.06-4.1-4.85-4A64,64,0,0,0,163.25,142c-.53.29-1,.58-1.54.89a17.31,17.31,0,0,0-3,2.31,19.93,19.93,0,0,0-1.92,2.19c-.22.3-.44.6-.63.91A15.35,15.35,0,0,0,154.63,162.56Z" />
                        <path class="cls-34" d="M158.58,169.58l.75-.21c-1.06-.56-2.34-1.89-3.77-4.68-3.4-6.63-2.2-12.74,1.19-17.3a19.93,19.93,0,0,1,1.92-2.19,17.81,17.81,0,0,1,3-2.31,13.31,13.31,0,0,0-7.18,3.75,10.9,10.9,0,0,0-2,3,13.9,13.9,0,0,0-1.14,6.47C151.85,167.17,157.9,169.36,158.58,169.58Z" />
                        <path class="cls-35" d="M164.91,162.65c.14.24,3.36,5.45,7.81-.07q-2.21.09-4.41.09A2.34,2.34,0,0,1,164.91,162.65Z" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="blog-wrapper">
            <h2 class="head-title mb-3">Blog</h2>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-4">
                            <div class="card h-100 d-flex flex-column flex-lg-row">
                                <img class="hover" src="{{asset('img/things_1.jpg')}}" alt="Blog Picture">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-column gap-2">
                                        <p class="mb-0 main-text">
                                            <i class="fa-regular fa-clock"></i>
                                            12 March, 2023
                                        </p>
                                        <p class="mb-0">
                                            SKOCH Awards:
                                            Nagaland Offroad
                                            Popular Vote
                                        </p>
                                        <p class="mb-0 main-text">
                                            The Popular vote
                                            carries a 15% weightage (upto 1.5 marks). This is added to the jury score...
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="more-btn">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card h-100 d-flex flex-column flex-lg-row">
                                <img class="hover" src="{{asset('img/blog-1.png')}}" alt="Blog Picture">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-column gap-2">
                                        <p class="mb-0 main-text">
                                            <i class="fa-regular fa-clock"></i>
                                            12 March, 2023
                                        </p>
                                        <p class="mb-0">
                                            SKOCH Awards:
                                            Nagaland Offroad
                                            Popular Vote
                                        </p>
                                        <p class="mb-0 main-text">
                                            The Popular vote
                                            carries a 15% weightage (upto 1.5 marks). This is added to the jury score...
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="more-btn">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card h-100 d-flex flex-column flex-lg-row">
                                <img class="hover" src="{{asset('img/blog-2.png')}}" alt="Blog Picture">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-column gap-2">
                                        <p class="mb-0 main-text">
                                            <i class="fa-regular fa-clock"></i>
                                            12 March, 2023
                                        </p>
                                        <p class="mb-0">
                                            SKOCH Awards:
                                            Nagaland Offroad
                                            Popular Vote
                                        </p>
                                        <p class="mb-0 main-text">
                                            The Popular vote
                                            carries a 15% weightage (upto 1.5 marks). This is added to the jury score...
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="more-btn">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card h-100 d-flex flex-column flex-lg-row">
                                <img class="hover" src="{{asset('img/blog-3.png')}}" alt="Blog Picture">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-column gap-2">
                                        <p class="mb-0 main-text">
                                            <i class="fa-regular fa-clock"></i>
                                            12 March, 2023
                                        </p>
                                        <p class="mb-0">
                                            SKOCH Awards:
                                            Nagaland Offroad
                                            Popular Vote
                                        </p>
                                        <p class="mb-0 main-text">
                                            The Popular vote
                                            carries a 15% weightage (upto 1.5 marks). This is added to the jury score...
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="more-btn">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="more-btn" href="#">
                                View all
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section -->
        <footer>
            <div class="container pt-4">
                <div class="row g-4">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="d-flex flex-column justify-content-evenly h-100">
                            <img class="footer_logo" src="{{asset('img/footer_logo.png')}}" alt="Footer Logo">
                            <p class="mb-0 connect-footer">
                                Connect with us<br />
                                <span>
                                    <i class="fa-brands fa-facebook" style="color: #1877f2; font-size: 22px;"></i>
                                </span>
                                <span>
                                    <i class="fa-brands fa-instagram" style="color: #e1306c; font-size: 22px;"></i>
                                </span>
                                <span>
                                    <i class="fa-brands fa-twitter" style="color: #1da1f2; font-size: 22px;"></i>
                                </span>
                                <span>
                                    <i class="fa-brands fa-youtube" style="color: #ff0000; font-size: 22px;"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <ul class="quick-links">
                            <li class="link-head">
                                Quick Links
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">News and Events</a></li>
                            <li><a href="#">Video Section</a></li>
                            <li><a href="#">Site Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <ul class="quick-links">
                            <li class="link-head">
                                Naviagtion
                            </li>
                            <li>
                                <a href="#">Ministry of Tourism</a>
                            </li>
                            <li><a href="#">National Portal of India</a></li>
                            <li><a href="#">Nagaland State Portal</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">More About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <ul class="quick-links govt-details">
                            <li class="link-head">
                                Nagaland Government
                            </li>
                            <li>
                                <a href="#">
                                    <img class="govt_logo" src="{{asset('img/nagaland_logo.png')}}" alt="Nagaland Govt Logo">
                                </a>
                            </li>
                            <li>
                                <p>
                                    <span>Phone: +91 370 2243124</span></br>
                                    <span>Email: nagalandtourism2014@gmail.com</span></br>
                                    <span>Address: Address: Directorate of Tourism,
                                        Opp. Indoor Stadium, Raj Bhawan Road,
                                        Kohima -797001, Nagaland
                                    </span></br>
                                    <span>
                                        Incredible India Tourist infoline: 1800-11-1363
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright mt-4">
                <div class="container">
                    <p class="mb-0">©Tourism Nagaland : Government of Nagaland 2022 Designed & developed by the Department of Information Technology & Communication: Nagaland</p>
                </div>
            </div>
        </footer>
        <!-- End of Footer Section -->
    </div>
    <!-- End of Video and Blog Section -->

</body>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/swiper.js')}}"></script>

<script>
    $(window).scroll(function() {
        $('nav').toggleClass('fixed-top scrolled', $(this).scrollTop() > 200);
    });

    $(function() {
        var link = $('#slider-menu li.link');

        $(".slides").on('scroll', function() {
            scrNav();
        });

        function scrNav() {
            var sTop = $(".slides").scrollTop();
            $('.slide-content').each(function() {
                var id = $(this).attr('id'),
                    offset = $(this).offset().top - 600,
                    height = $(this).height();

                if (sTop >= offset && sTop < offset + height) {
                    link.removeClass('active');
                    $("#slider-menu").find('[data-scroll="' + id + '"]').addClass('active');
                }
            });
        }
        scrNav();
    });

    videoPlay = (flag) => {
        if (flag) {
            if ($(".video-overlay").hasClass("d-block") && $("#hornbill").hasClass("d-block")) {
                $(".video-overlay").removeClass("d-block");
                $(".video-overlay").addClass("d-none");
                $("#hornbill").removeClass("d-block");
                $("#hornbill").addClass("d-none");
            }
            $(".video-nagaland").attr("autoplay", "false");
            $(".video-nagaland").attr("controls", "true");
        } else {
            if ($(".video-overlay").hasClass("d-none") && $("#hornbill").hasClass("d-none")) {
                $(".video-overlay").removeClass("d-none");
                $(".video-overlay").addClass("d-block");
                $("#hornbill").removeClass("d-none");
                $("#hornbill").addClass("d-block");
            }
            $(".video-nagaland").removeAttr("autoplay");
            $(".video-nagaland").removeAttr("controls");
        }
    }
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>
