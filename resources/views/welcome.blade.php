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
                                <a href="#">
                                    <i class="fa-regular fa-lock-keyhole"></i>
                                    <span>Login</span>
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
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
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
                            <img src="{{asset('img/pic-3.png')}}" class="d-block w-100" alt="Slider Image 3">
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
                <div class="col-1 d-flex align-items-center">
                    <ul class="slide_navigation position-relative" id="slider-menu">
                        <li class="link active" data-scroll="slide_1"><a data-scroll="slide_1" href="#slide_1" class="dot"></a></li>
                        <li class="link" data-scroll="slide_2"><a data-scroll="slide_2" href="#slide_2" class="dot"></a></li>
                        <li class="link" data-scroll="slide_3"><a data-scroll="slide_3" href="#slide_3" class="dot"></a></li>
                    </ul>
                </div>
                <div class="col-5">
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
                <div class="col-6">
                    <div class="scroll-warpper">
                        <section class="slider">
                            <div class="slides">
                                <div id="slide_1" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">About Nagaland</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div id="slide_2" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">About Nagaland</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div id="slide_3" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">About Nagaland</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a href="#">
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
                <div class="col-4 d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <h1 class="head-title">Where to visit now</h1>
                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                    </div>
                </div>
                <div class="col-8">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-1.jpeg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Doyang Hydro Project
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-2.jpg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Touphema Tourist Village
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-3.jpg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Khezhakeno Village and Chida Resort
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-1.jpeg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Doyang Hydro Project
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-2.jpg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Touphema Tourist Village
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card h-100">
                                    <img src="{{asset('img/visit-3.jpg')}}" alt="Visit Now Pic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>
                                                Khezhakeno Village and Chida Resort
                                            </h6>
                                            <p>
                                                <i class="fa-regular fa-heart"></i>
                                            </p>
                                        </div>
                                        <p class="mb-0 main-text">
                                            A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture –
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 things-section g-4">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="head-title">Things to do</h1>
                        <a href="#">
                            See more
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-evenly">
                        <div class="card h-100">
                            <img src="{{asset('img/things_1.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Offroading
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img src="{{asset('img/things_2.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Trekking
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img src="{{asset('img/things_3.jpg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Bike Rides
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img src="{{asset('img/things_4.jpeg')}}" alt="Things to do">
                            <div class="card-body">
                                <p class="mb-0 d-flex align-items-center justify-content-between">
                                    Camping
                                    <i class="fa-regular fa-heart"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card h-100">
                            <img src="{{asset('img/things_5.jpg')}}" alt="Things to do">
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
                <div class="col-12 mt-4">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <a href="#">
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

                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <a href="#">
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

                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <a href="#">
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

                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <img class="event-pic" src="{{asset('img/things_3.jpg')}}" alt="Events Pic">
                                        </div>
                                        <div class="col-9 d-flex">
                                            <div class="d-flex flex-column justify-content-between">
                                                <h6>Tuluni Festival</h6>
                                                <p class="mb-0 main-text">Tuluni is a festival of great significance for the Sumi Nagas. This festival is marked with feasts as the occasion occurs in the bountiful…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="row g-3 d-flex align-items-center w-100">
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>08 July, 2023</h6>
                                            <p class="mb-0 main-text">Start Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>15 July, 2023</h6>
                                            <p class="mb-0 main-text">End Date</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <h6>Wokha</h6>
                                            <p class="mb-0 main-text">Location</p>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end">
                                            <a href="#">
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

                <div class="col-12 mt-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#">
                            View all
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Upcomming Events -->
</body>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/swiper.js')}}"></script>

<script>
    $(function() {

        var link = $('#slider-menu li.link');

        // Run the scrNav when scroll
        $(".slides").on('scroll', function() {
            scrNav();
        });

        // scrNav function 
        // Change active dot according to the active section in the window
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