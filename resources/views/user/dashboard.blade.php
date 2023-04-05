<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <div class="login-wrapper">
        <div class="bg-mask">
            <img src="{{asset('img/pic-2.jpg')}}" />
        </div>
        <div class="container mt-5 mb-5 ">
            <div class="row mb-4 g-4">
                <div class="col-12">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <div class="row mb-4 text-center">
                               <b>Welcome, {{Auth::User()->name}}</b> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>