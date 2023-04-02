<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <div class="container mt-5 mb-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <div class="row mb-4 justify-content-center">
                    <div class="col-md-6 col-sm-12 col-xl-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                             
                                <x-button class="btn btn-success btn-sm rounded-0">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>


</x-guest-layout>