<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="login-wrapper">
        <div class="bg-mask">
            <img src="{{asset('img/pic-2.jpg')}}" />
        </div>
        <div class="container mt-5 mb-5 ">
            <div class="row mb-4 g-4">
                <div class="col-12">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="login-btn nav-link active" aria-current="page" href="#" onclick="viewFroms(event)">Log-In</a>
                        </li>
                        <li class="nav-item">
                            <a class="registration-btn nav-link" href="{{Route('register')}}">Registration</a>
                        </li>
                    </ul>

                    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-12 col-lg-6">
                                    <div class="text-clip">
                                        <h3>
                                            Welcome To,
                                            <br />
                                            <span>Nagaland Tourism</span>
                                        </h3>
                                        <img class="login-img" src="{{asset('img/login-bg.jpg')}}" alt="Login Background">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xl-6 login-div">
                                    <div class="text-clip w-100">
                                        <h3 class="text-center login-text">Login</h3>
                                        <img class="login-img2" src="{{asset('img/login-bg.jpg')}}" alt="Login Background">
                                    </div>
                                    <!-- Login Form -->
                                    <form method="POST" action="{{ route('login') }}" class="w-100">
                                        @csrf
                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="email" :value="__('Email')" />

                                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" autofocus />
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-input id="password" class="form-control" type="password" name="password" autocomplete="current-password" />
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center mt-4">

                                            <x-button class="btn btn-success btn-sm rounded-0">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div>
                                    </form>
                                    <!-- End of Login Form -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        viewFroms = (event) => {

            if (event.target.classList[0] == "registration-btn") {
                $(".login-div").css("display", "none");
                $(".registration-div").css("display", "flex");

                $(".login-btn").removeClass("active");
                $(".registration-btn").addClass("active");
            } else {
                $(".login-div").css("display", "flex");
                $(".registration-div").css("display", "none");

                $(".login-btn").addClass("active");
                $(".registration-btn").removeClass("active");
            }
        }
    </script>

</x-guest-layout>