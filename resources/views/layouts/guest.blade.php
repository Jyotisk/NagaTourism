<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourism Nagaland</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style-2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="fixed-social">
        <div>
            <a href="#" class="fixed-facebook" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
        </div>
        <div>
            <a href="#" class="fixed-twitter" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </div>
        <div>
            <a href="#" class="fixed-instagrem" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <div>
            <a href="#" class="fixed-tumblr" target="_blank">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </div>
    </div>
    <div class="position-relative">

        <header class="pt-3 pb-3 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <a class="navbar-brand" href="#">
                                <img class="logo-1" src="{{asset('img/footer_logo.png')}}" alt="Logo" />
                            </a>
                            <h3>Department of Tourism, &nbsp;Government of Nagaland</h3>
                            <a class="navbar-brand" href="#">
                                <img class="logo-2" src="{{asset('img/nagaland_logo.png')}}" alt="Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header for Small Screen -->
        <header class="pt-3 pb-3 d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <a class="navbar-brand" href="#">
                                <img class="logo-1" src="{{asset('img/footer_logo.png')}}" alt="Logo" />
                            </a>
                            <a class="navbar-brand" href="#">
                                <img class="logo-2" src="{{asset('img/nagaland_logo.png')}}" alt="Logo" />
                            </a>
                        </div>
                        <h3 class="text-center mt-2">Department of Tourism, &nbsp;Government of Nagaland</h3>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header Social and Login Sections -->

        <!-- Slider, Nav Bar and News Section -->
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-end">
                {{-- <a class="navbar-brand" href="#">
                    <img src="{{asset('/img/logo.svg')}}" alt="Logo">
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{Route('index')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('about-us')||Route::is('about-nagaland')||Route::is('about-districts') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ Route::is('about-us') ? 'active' : '' }}" href="{{Route('about-us')}}">About Us</a></li>
                                <li><a class="dropdown-item {{ Route::is('about-nagaland') ? 'active' : '' }}" href="{{Route('about-nagaland')}}">About Nagaland</a></li>
                                <li><a class="dropdown-item {{ Route::is('about-districts') ? 'active' : '' }}" href="{{Route('about-districts')}}">About Districts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="#">Service-1</a></li>
                                <li><a class="dropdown-item" href="#">Service-2</a></li>
                                <li><a class="dropdown-item" href="#">Service-3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('offroad')}}">Nagaland Offroad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('destination') ? 'active' : '' }}" href="{{Route('destination')}}">Destinations</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publication</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Publication-1</a></li>
                                <li><a class="dropdown-item" href="#">Publication-2</a></li>
                                <li><a class="dropdown-item" href="#">Publication-3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Departments</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Departments-1</a></li>
                                <li><a class="dropdown-item" href="#">Departments-2</a></li>
                                <li><a class="dropdown-item" href="#">Departments-3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('Hotels')||Route::is('Homestay')||Route::is('TravelOperators')||Route::is('RegisteredGuide') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link" href="{{Route('GetContactus')}}">Contact</a>
                        </li>
                        @if(Auth::User())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ Route::is('login') ? 'active' : '' }}" href="{{Route('login')}}">Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <span class="text-danger">Log Out</span>
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('login')}}">Log In</a>
                        </li>
                        @endif
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

        <!-- End of Slider, Nav Bar and News section -->
    </div>

    {{$slot}}

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
                            <a href="{{Route('blog')}}">Blog</a>
                        </li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="{{Route('events')}}">News and Events</a></li>
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

</body>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/swiper.js')}}"></script>

<script>
    $(window).scroll(function() {
        $('.menu-bar').toggleClass('fixed-top scrolled', $(this).scrollTop() > 200);
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