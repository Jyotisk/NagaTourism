<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .counter {
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            background: #fff;
            text-align: center;
            width: 190px;
            padding: 25px 30px 10px;
            margin: 0 auto;
            border-radius: 30px 0;
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1;
        }

        .counter:before {
            content: "";
            background: #51d658;
            border-radius: 15px 0 30px 0;
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.15);
            position: absolute;
            top: 12px;
            left: 12px;
            right: 12px;
            bottom: 27px;
            z-index: -1;
        }

        .counter .counter-icon {
            font-size: 35px;
            margin: 0 0 10px;
            transform: rotateX(0deg);
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-icon {
            transform: rotateX(360deg);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        .counter h3 {
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 20px;
        }

        .counter .counter-value {
            color: #666;
            background: #fff;
            font-size: 33px;
            font-weight: 600;
            text-align: right;
            line-height: 60px;
            width: 90%;
            height: 50px;
            padding: 0 15px;
            margin: 0 0 0 -20px;
            display: block;
        }

        .counter.pink:before {
            background-color: #FF5D94;
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 40px;
            }
        }
    </style>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3>Todays Vistis</h3>
                            <span class="counter-value">{{$today_visitors_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3>Total Visits</h3>
                            <span class="counter-value">{{$visitors_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter pink">
                            <div class="counter-icon">
                                <i class="fa fa-blog"></i>
                            </div>
                            <h3>Blogs</h3>
                            <span class="counter-value">{{$today_visitors_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter pink">
                            <div class="counter-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <h3>Events</h3>
                            <span class="counter-value">{{$visitors_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter pink">
                            <div class="counter-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <h3>Destinations</h3>
                            <span class="counter-value">{{$visitors_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-hotel"></i>
                            </div>
                            <h3>Hotels</h3>
                            <span class="counter-value">{{$hotel_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <h3>Homestay</h3>
                            <span class="counter-value">{{$homestay_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3>Travel Operator</h3>
                            <span class="counter-value">{{$travel_operator_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h3>Register Guide</h3>
                            <span class="counter-value">{{$guide_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter pink">
                            <div class="counter-icon">
                            <i class="fa fa-building"></i>
                             </div>
                            <h3>Designated Official</h3>
                            <span class="counter-value">{{$official_count}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>