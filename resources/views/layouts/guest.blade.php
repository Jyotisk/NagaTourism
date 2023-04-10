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
                            <h3 class="govt-name">
                                <span>Department of Tourism</span>
                                <br />
                                <span class="second-name">
                                    Government of Nagaland
                                </span>
                            </h3>
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
                        <h3 class="govt-name">
                            <span>
                                Department of Tourism
                            </span>
                            <br />
                            <span class="second-name">
                                Government of Nagaland
                            </span>
                        </h3>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header Social and Login Sections -->

        <!-- Slider, Nav Bar and News Section -->
        <nav class="navbar navbar-expand-lg d-none d-lg-block menu-bar">
            <div class="container justify-content-end">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('/img/logo.svg')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{Route('index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('about-us')||Route::is('about-nagaland')||Route::is('about-districts') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mission</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-nagaland') ? 'active' : '' }}" href="{{Route('about-nagaland')}}">Vision</a></li>
                            <li><a class="dropdown-item" href="#">Organisation Structure</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-us') ? 'active' : '' }}" href="{{Route('about-us')}}">Key Personal</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-districts') ? 'active' : '' }}" href="{{Route('about-districts')}}">About Districts</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('offroad')||Route::is('events') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('offroad') ? 'active' : '' }}" href="{{Route('offroad')}}">Nagaland Offroad</a></li>
                            <li><a class="dropdown-item {{ Route::is('events') ? 'active' : '' }}" href="{{Route('events')}}">Festivals</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('blog') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publication</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Article</a></li>
                            <li><a class="dropdown-item" href="{{Route('blog')}}">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Newsletter</a></li>
                            <li><a class="dropdown-item" href="#">Administrative Calender</a></li>
                            <li><a class="dropdown-item" href="#">Budget Publication</a></li>

                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
                        <div class="destination-menu dropdown-menu">
                            <ul>
                                <li>
                                    <h3 class="drop-title">Kohima District "First District"</h3>
                                </li>
                                <li>
                                    <a href="#">Kohima World War-II</a>
                                </li>
                                <li>
                                    <a href="#">Kohima Cathedral</a>
                                </li>
                                <li>
                                    <a href="#">State Museum</a>
                                </li>
                                <li>
                                    <a href="#">Naga Heritage Village(Kisam)</a>
                                </li>
                                <li>
                                    <a href="#">Dzuleke</a>
                                </li>
                                <li>
                                    <a href="#">Dzukou Valley</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Mokokchung District "Land of Pioneers"</h3>
                                </li>
                                <li>
                                    <a href="#">Sungkotenem</a>
                                </li>
                                <li>
                                    <a href="#">Mopong Ki</a>
                                </li>
                                <li>
                                    <a href="#">Dr. E.W. Clark Monument</a>
                                </li>
                                <li>
                                    <a href="#">Atu Tenem</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Tuensang District "Land of Culture"</h3>
                                </li>
                                <li>
                                    <a href="#">Taimuphu</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Mon District "Land of Anghs"</h3>
                                </li>
                                <li>
                                    <a href="#">Wood Carvings at Shangnyu</a>
                                </li>
                                <li>
                                    <a href="#">Angphang</a>
                                </li>
                                <li>
                                    <a href="#">Tangnyu</a>
                                </li>
                                <li>
                                    <a href="#">Chi</a>
                                </li>
                                <li>
                                    <a href="#">Longwa and Human Skulls Exhibits at Sheanghah Chingnyu</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Phek District "Land of Tradition"</h3>
                                </li>
                                <li>
                                    <a href="#">Shilloi Lake</a>
                                </li>
                                <li>
                                    <a href="#">Zanibu Lake</a>
                                </li>
                                <li>
                                    <a href="#">Cane Handicrafts at Reguri Village</a>
                                </li>
                                <li>
                                    <a href="#">Longchamtsam(Melancholy Lake)</a>
                                </li>
                                <li>
                                    <a href="#">Chida Lake</a>
                                </li>
                                <li>
                                    <a href="#">Tso Tawo(Spirit Stone) at Khezhakeno</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Wokha District "Land of Plenty"</h3>
                                </li>
                                <li>
                                    <a href="#">Tourist village at Old Riphyim</a>
                                </li>
                                <li>
                                    <a href="#">Tsumang Lake</a>
                                </li>
                                <li>
                                    <a href="#">Wokha Town</a>
                                </li>
                                <li>
                                    <a href="#">DHEP</a>
                                </li>
                                <li>
                                    <a href="#">Amur Falcon Roosting Site at
                                        Pangti village
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Zunheboto District "Land of Warriors"</h3>
                                </li>
                                <li>
                                    <a href="#">Wildlife Sanctuary at Satoi village under Satakha</a>
                                </li>
                                <li>
                                    <a href="#">Ghosu Wild life Bird Sanctuary at Ghukiye village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Dimapur District "Commercial District"</h3>
                                </li>
                                <li>
                                    <a href="#">Ruins of Medieval Kachari Kingdom</a>
                                </li>
                                <li>
                                    <a href="#">Green Park</a>
                                </li>
                                <li>
                                    <a href="#">NEZCC Museum</a>
                                </li>
                                <li>
                                    <a href="#">Niathu Resort</a>
                                </li>
                                <li>
                                    <a href="#">Noune Resort</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Kiphire District "Land of Minerals"</h3>
                                </li>
                                <li>
                                    <a href="#">Mount Saramati</a>
                                </li>
                                <li>
                                    <a href="#">Tongkhin (Anatonger village)</a>
                                </li>
                                <li>
                                    <a href="#">Likhimro Hydro Project</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Longleng District "Land of Handicrafts"</h3>
                                </li>
                                <li>
                                    <a href="#">Ahom Raja Caves at Bhumnyu and Bura Namsang</a>
                                </li>
                                <li>
                                    <a href="#">Shamnyu Lake at Pongo</a>
                                </li>
                                <li>
                                    <a href="#">Tangha Lake at Tangha</a>
                                </li>
                                <li>
                                    <a href="#">Stone Pillars at Yongtap/ Yachem village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Peren District "Green Districts"</h3>
                                </li>
                                <li>
                                    <a href="#">Mt. Pauna</a>
                                </li>
                                <li>
                                    <a href="#">Ntangki National Park</a>
                                </li>
                                <li>
                                    <a href="#">Benrei Tourist Village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Noklak District-‘Frontier District’</h3>
                                </li>
                                <li>
                                    <a href="#">International Trade Centre</a>
                                </li>
                                <li>
                                    <a href="#">Dan (Pangsha)</a>
                                </li>
                                <li>
                                    <a href="#">Wui (Pottery and air Blacksmiths)</a>
                                </li>
                                <li>
                                    <a href="#">Choklangan (Weaving and Wildlife)</a>
                                </li>
                                <li>
                                    <a href="#">New Pangsha (VG Memorial Museum)</a>
                                </li>
                                <li>
                                    <a href="#">Peshu (Slate village)</a>
                                </li>
                                <li>
                                    <a href="#">Khullioh
                                        Mountain Ranges
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Kingjung and Chiphur (Rock Bees and Caves)
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Tseminyu District ‘Historical District’</h3>
                                </li>
                                <li>
                                    <a href="#">Sendenyu Biodiversity Wildlife Sanctuary</a>
                                </li>
                                <li>
                                    <a href="#">Nsonji Lake</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Niuland District ‘Land of Diversity’</h3>
                                </li>

                                <li>
                                    <h3 class="drop-title">Chumoukedima District ‘Land of Opportunities’</h3>
                                </li>
                                <li>
                                    <a href="#">Diezephe Craft Village</a>
                                </li>
                                <li>
                                    <a href="#">Seithekema Waterfall</a>
                                </li>
                                <li>
                                    <a href="#">Tsiepama Mid Way Resort</a>
                                </li>
                                <li>
                                    <a href="#">Niathu Resort</a>
                                </li>
                                <li>
                                    <a href="#">Noune
                                        Resort
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Shamator District ‘Brotherhood District’</h3>
                                </li>
                                <li>
                                    <a href="#">Y. Anner village</a>
                                </li>
                                <li>
                                    <a href="#">Langa at Langa village</a>
                                </li>
                                <li>
                                    <a href="#">Kemephu/Teimefu at Waphur village</a>
                                </li>
                                <li>
                                    <a href="#">Mihtsuhlong (Man eating stone) at Y. Anner village</a>
                                </li>
                                <li>
                                    <a href="#">Ttsungtuke at Kiutsukiup village
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Yakomuzung at Yakor village
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ Route::is('destination') ? 'active' : '' }}" href="{{Route('destination')}}">Destinations</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('RegisteredGuide')||Route::is('TravelOperators')||Route::is('Hotels')||Route::is('Homestay') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tourist Corner</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Covid-19 Guideline</a></li>
                            <li><a class="dropdown-item" href="#">Tourism Brochure</a></li>
                            <li><a class="dropdown-item" href="#">Tourism Service Provider</a></li>
                            <li><a class="dropdown-item {{ Route::is('RegisteredGuide') ? 'active' : '' }}" href="{{Route('RegisteredGuide')}}">Tourism Guides</a></li>
                            <li><a class="dropdown-item {{ Route::is('TravelOperators') ? 'active' : '' }}" href="{{Route('TravelOperators')}}">Transport Services</a></li>
                            <li><a class="dropdown-item {{ Route::is('Hotels') ? 'active' : '' }}" href="{{Route('Hotels')}}">Hotels</a></li>
                            <li><a class="dropdown-item {{ Route::is('Homestay') ? 'active' : '' }}" href="{{Route('Homestay')}}">Homestay</a></li>
                            <li><a class="dropdown-item" href="#">Books/Coffee Table</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-SERVICES</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Inbound Tourism & Inner Line Permit</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Hotel/Resort Service Provider</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Tourist Guide</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Homestay Service Provider</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Photographer/Videographer</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Content Creator/Blog Writer</a></li>
                            <li><a class="dropdown-item" href="#">E-Marketplace</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Booking</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Online Properties Booking</a></li>
                            <li><a class="dropdown-item" href="#">Online Package Booking</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Department</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tenders</a></li>
                            <li><a class="dropdown-item" href="#">RTI</a></li>
                            <li><a class="dropdown-item" href="#">GOs/Order/Circular</a></li>
                            <li><a class="dropdown-item" href="#">Notice</a></li>
                            <li><a class="dropdown-item" href="#">News/Announcement</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#">Store</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="{{Route('GetContactus')}}">Contact</a>-->
                    <!--</li>-->
                    @if(Auth::User())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                </div>
            </div>
        </nav>

        <!-- Nav bar for mobile screen -->
        <nav class="navbar navbar-expand-lg d-lg-none menu-bar">
            <div class="container justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{Route('index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('about-us')||Route::is('about-nagaland')||Route::is('about-districts') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mission</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-nagaland') ? 'active' : '' }}" href="{{Route('about-nagaland')}}">Vision</a></li>
                            <li><a class="dropdown-item" href="#">Organisation Structure</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-us') ? 'active' : '' }}" href="{{Route('about-us')}}">Key Personal</a></li>
                            <li><a class="dropdown-item {{ Route::is('about-districts') ? 'active' : '' }}" href="{{Route('about-districts')}}">About Districts</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('offroad')||Route::is('events') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('offroad') ? 'active' : '' }}" href="{{Route('offroad')}}">Nagaland Offroad</a></li>
                            <li><a class="dropdown-item {{ Route::is('events') ? 'active' : '' }}" href="{{Route('events')}}">Festivals</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('blog') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publication</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Article</a></li>
                            <li><a class="dropdown-item" href="{{Route('blog')}}">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Newsletter</a></li>
                            <li><a class="dropdown-item" href="#">Administrative Calender</a></li>
                            <li><a class="dropdown-item" href="#">Budget Publication</a></li>

                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
                        <div class="destination-menu dropdown-menu">
                            <ul>
                                <li>
                                    <h3 class="drop-title">Kohima District "First District"</h3>
                                </li>
                                <li>
                                    <a href="#">Kohima World War-II</a>
                                </li>
                                <li>
                                    <a href="#">Kohima Cathedral</a>
                                </li>
                                <li>
                                    <a href="#">State Museum</a>
                                </li>
                                <li>
                                    <a href="#">Naga Heritage Village(Kisam)</a>
                                </li>
                                <li>
                                    <a href="#">Dzuleke</a>
                                </li>
                                <li>
                                    <a href="#">Dzukou Valley</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Mokokchung District "Land of Pioneers"</h3>
                                </li>
                                <li>
                                    <a href="#">Sungkotenem</a>
                                </li>
                                <li>
                                    <a href="#">Mopong Ki</a>
                                </li>
                                <li>
                                    <a href="#">Dr. E.W. Clark Monument</a>
                                </li>
                                <li>
                                    <a href="#">Atu Tenem</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Tuensang District "Land of Culture"</h3>
                                </li>
                                <li>
                                    <a href="#">Taimuphu</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Mon District "Land of Anghs"</h3>
                                </li>
                                <li>
                                    <a href="#">Wood Carvings at Shangnyu</a>
                                </li>
                                <li>
                                    <a href="#">Angphang</a>
                                </li>
                                <li>
                                    <a href="#">Tangnyu</a>
                                </li>
                                <li>
                                    <a href="#">Chi</a>
                                </li>
                                <li>
                                    <a href="#">Longwa and Human Skulls Exhibits at Sheanghah Chingnyu</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Phek District "Land of Tradition"</h3>
                                </li>
                                <li>
                                    <a href="#">Shilloi Lake</a>
                                </li>
                                <li>
                                    <a href="#">Zanibu Lake</a>
                                </li>
                                <li>
                                    <a href="#">Cane Handicrafts at Reguri Village</a>
                                </li>
                                <li>
                                    <a href="#">Longchamtsam(Melancholy Lake)</a>
                                </li>
                                <li>
                                    <a href="#">Chida Lake</a>
                                </li>
                                <li>
                                    <a href="#">Tso Tawo(Spirit Stone) at Khezhakeno</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Wokha District "Land of Plenty"</h3>
                                </li>
                                <li>
                                    <a href="#">Tourist village at Old Riphyim</a>
                                </li>
                                <li>
                                    <a href="#">Tsumang Lake</a>
                                </li>
                                <li>
                                    <a href="#">Wokha Town</a>
                                </li>
                                <li>
                                    <a href="#">DHEP</a>
                                </li>
                                <li>
                                    <a href="#">Amur Falcon Roosting Site at
                                        Pangti village
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Zunheboto District "Land of Warriors"</h3>
                                </li>
                                <li>
                                    <a href="#">Wildlife Sanctuary at Satoi village under Satakha</a>
                                </li>
                                <li>
                                    <a href="#">Ghosu Wild life Bird Sanctuary at Ghukiye village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Dimapur District "Commercial District"</h3>
                                </li>
                                <li>
                                    <a href="#">Ruins of Medieval Kachari Kingdom</a>
                                </li>
                                <li>
                                    <a href="#">Green Park</a>
                                </li>
                                <li>
                                    <a href="#">NEZCC Museum</a>
                                </li>
                                <li>
                                    <a href="#">Niathu Resort</a>
                                </li>
                                <li>
                                    <a href="#">Noune Resort</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Kiphire District "Land of Minerals"</h3>
                                </li>
                                <li>
                                    <a href="#">Mount Saramati</a>
                                </li>
                                <li>
                                    <a href="#">Tongkhin (Anatonger village)</a>
                                </li>
                                <li>
                                    <a href="#">Likhimro Hydro Project</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Longleng District "Land of Handicrafts"</h3>
                                </li>
                                <li>
                                    <a href="#">Ahom Raja Caves at Bhumnyu and Bura Namsang</a>
                                </li>
                                <li>
                                    <a href="#">Shamnyu Lake at Pongo</a>
                                </li>
                                <li>
                                    <a href="#">Tangha Lake at Tangha</a>
                                </li>
                                <li>
                                    <a href="#">Stone Pillars at Yongtap/ Yachem village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Peren District "Green Districts"</h3>
                                </li>
                                <li>
                                    <a href="#">Mt. Pauna</a>
                                </li>
                                <li>
                                    <a href="#">Ntangki National Park</a>
                                </li>
                                <li>
                                    <a href="#">Benrei Tourist Village</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Noklak District-‘Frontier District’</h3>
                                </li>
                                <li>
                                    <a href="#">International Trade Centre</a>
                                </li>
                                <li>
                                    <a href="#">Dan (Pangsha)</a>
                                </li>
                                <li>
                                    <a href="#">Wui (Pottery and air Blacksmiths)</a>
                                </li>
                                <li>
                                    <a href="#">Choklangan (Weaving and Wildlife)</a>
                                </li>
                                <li>
                                    <a href="#">New Pangsha (VG Memorial Museum)</a>
                                </li>
                                <li>
                                    <a href="#">Peshu (Slate village)</a>
                                </li>
                                <li>
                                    <a href="#">Khullioh
                                        Mountain Ranges
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Kingjung and Chiphur (Rock Bees and Caves)
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Tseminyu District ‘Historical District’</h3>
                                </li>
                                <li>
                                    <a href="#">Sendenyu Biodiversity Wildlife Sanctuary</a>
                                </li>
                                <li>
                                    <a href="#">Nsonji Lake</a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Niuland District ‘Land of Diversity’</h3>
                                </li>

                                <li>
                                    <h3 class="drop-title">Chumoukedima District ‘Land of Opportunities’</h3>
                                </li>
                                <li>
                                    <a href="#">Diezephe Craft Village</a>
                                </li>
                                <li>
                                    <a href="#">Seithekema Waterfall</a>
                                </li>
                                <li>
                                    <a href="#">Tsiepama Mid Way Resort</a>
                                </li>
                                <li>
                                    <a href="#">Niathu Resort</a>
                                </li>
                                <li>
                                    <a href="#">Noune
                                        Resort
                                    </a>
                                </li>

                                <li>
                                    <h3 class="drop-title">Shamator District ‘Brotherhood District’</h3>
                                </li>
                                <li>
                                    <a href="#">Y. Anner village</a>
                                </li>
                                <li>
                                    <a href="#">Langa at Langa village</a>
                                </li>
                                <li>
                                    <a href="#">Kemephu/Teimefu at Waphur village</a>
                                </li>
                                <li>
                                    <a href="#">Mihtsuhlong (Man eating stone) at Y. Anner village</a>
                                </li>
                                <li>
                                    <a href="#">Ttsungtuke at Kiutsukiup village
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Yakomuzung at Yakor village
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ Route::is('destination') ? 'active' : '' }}" href="{{Route('destination')}}">Destinations</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('RegisteredGuide')||Route::is('TravelOperators')||Route::is('Hotels')||Route::is('Homestay') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tourist Corner</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Covid-19 Guideline</a></li>
                            <li><a class="dropdown-item" href="#">Tourism Brochure</a></li>
                            <li><a class="dropdown-item" href="#">Tourism Service Provider</a></li>
                            <li><a class="dropdown-item {{ Route::is('RegisteredGuide') ? 'active' : '' }}" href="{{Route('RegisteredGuide')}}">Tourism Guides</a></li>
                            <li><a class="dropdown-item {{ Route::is('TravelOperators') ? 'active' : '' }}" href="{{Route('TravelOperators')}}">Transport Services</a></li>
                            <li><a class="dropdown-item {{ Route::is('Hotels') ? 'active' : '' }}" href="{{Route('Hotels')}}">Hotels</a></li>
                            <li><a class="dropdown-item {{ Route::is('Homestay') ? 'active' : '' }}" href="{{Route('Homestay')}}">Homestay</a></li>
                            <li><a class="dropdown-item" href="#">Books/Coffee Table</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-SERVICES</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Inbound Tourism & Inner Line Permit</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Hotel/Resort Service Provider</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Tourist Guide</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Homestay Service Provider</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Photographer/Videographer</a></li>
                            <li><a class="dropdown-item" href="#">Registration of Content Creator/Blog Writer</a></li>
                            <li><a class="dropdown-item" href="#">E-Marketplace</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Booking</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Online Properties Booking</a></li>
                            <li><a class="dropdown-item" href="#">Online Package Booking</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Department</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tenders</a></li>
                            <li><a class="dropdown-item" href="#">RTI</a></li>
                            <li><a class="dropdown-item" href="#">GOs/Order/Circular</a></li>
                            <li><a class="dropdown-item" href="#">Notice</a></li>
                            <li><a class="dropdown-item" href="#">News/Announcement</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#">Store</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="{{Route('GetContactus')}}">Contact</a>-->
                    <!--</li>-->
                    @if(Auth::User())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li><a href=" #">Store</a>
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
                        <li><a href="{{Route('GetContactus')}}">Contact Us</a></li>
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