<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourism Nagaland</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
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

    <!-- Slider and Nav bar section -->
    <div class="slider-nav-wrapper">
        <ul class="slideshow m-0">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>

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

        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="slider-title">
                        <h3 class="head-title">Stalingrad of the East</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque provident, qui quis rem consequuntur numquam cum adipisci neque modi vitae dolor commodi itaque praesentium corporis perspiciatis quo placeat voluptatibus aspernatur?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Slider and Nav bar section -->

    <!-- New Section -->
    <div class="d-flex align-items-center">
        <div class="">

        </div>
    </div>
    <!-- End of News Section -->

</body>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

</html>