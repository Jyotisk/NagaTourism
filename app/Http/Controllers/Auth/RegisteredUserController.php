<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_no' => ['required','digits:10','unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'user_type_id' => 4,
            'password' => Hash::make($request->password),
            'status' => true,

        ]);

        event(new Registered($user));

        Auth::login($user);

        switch (true) {
            case Auth::user()->user_type_id == 1:
                return redirect()->intended(RouteServiceProvider::HOME);
            case Auth::user()->user_type_id == 2:
                return redirect('/admin/dashboard');
            case Auth::user()->user_type_id == 3:
                return redirect('/blogger/dashboard');
            case Auth::user()->user_type_id == 4:
                return redirect('/user/dashboard');
            default:
                return '/';
        }
    }
}
