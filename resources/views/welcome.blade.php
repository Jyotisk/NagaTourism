<x-guest-layout>
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
                                        <h1 class="head-title">About Nagaland</h1>
                                        <p class="main-text">A land engulfed in mystery, inhabited by vibrant people zealously guarding their culture – dancers, warriors, head-hunters; mountains, valleys, forests – all these form the portrait of Nagaland the moment the word is uttered.</p>

                                        <a class="more-btn" href="#">
                                            See more
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div id="slide_3" class="slide slide-content">
                                    <div class="inner_content">
                                        <h1 class="head-title">About Nagaland</h1>
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
                                            <h6>
                                               {{Str::limit($destiny->header, 30)}}
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
    <!-- End of Upcomming Events -->
</x-guest-layout>

  