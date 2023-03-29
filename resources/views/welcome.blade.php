<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourism Nagaland</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel-default-theme.css')}}">
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
                    <ul class="slide_navigation position-relative">
                        <li><a href="#slide_1" class="dot active"></a></li>
                        <li><a href="#slide_2" class="dot"></a></li>
                        <li><a href="#slide_3" class="dot"></a></li>
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
                                <div class="slide">
                                    <div class="inner_content">
                                        <h1>Slide 1</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="slide">
                                    <div class="inner_content">
                                        <h1>Slide 2</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="slide">
                                    <div class="inner_content">
                                        <h1>Slide 3</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
</body>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/scrollify.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script>
    (function() {
        "use strict";

        // Vertical Slider object
        const vertical_slider = {

            // Slide class name
            slider_class: ".slider",

            // Show slide
            show_slide: function(slide_id, context_item) {
                const slide_container = context_item.closest(this.slider_class).querySelector(".slides");
                if (slide_container) {
                    const slides = slide_container.querySelectorAll(".slide");
                    if (slides && slides[slide_id]) {

                        // Scroll to active slide
                        slide_container.scrollTo({
                            top: slides[slide_id].offsetTop,
                            behavior: "smooth"
                        });


                        // Set active context item
                        const active_context_item = context_item.closest(".slide_navigation").querySelector(".active");
                        if (active_context_item) {
                            active_context_item.classList.remove("active");
                        }

                        context_item.classList.add("active");
                    }
                }
            },

            // Initialize slide
            init_slider: function(slider) {

                const navigation_items = slider.querySelectorAll(".slide_navigation a");

                if (navigation_items) {
                    Object.keys(navigation_items).forEach(function(key) {
                        navigation_items[key].onclick = function(e) {
                            e.preventDefault();

                            vertical_slider.show_slide(key, navigation_items[key]);
                        };
                    });
                }

            },

            // Initialize sliders
            init: function() {

                // Iterate over each slider
                document.querySelectorAll(this.slider_class).forEach((slider) => this.init_slider(slider));

            }
        };

        // Initialize sliders
        vertical_slider.init();
    }());
</script>

</html>