<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function login()
    {
        if (\auth()->user()) {
            return redirect()->route('home.show');
        }
        return view('guest.login');
    }
    public function loginCheck(Request $request)
    {
        $request->validate([
            'email'  => 'required|exists:users',
            'password' => 'required'
        ]);

        $dataAttempt = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($dataAttempt)) {
            return redirect()->intended(route('home.show'))
                ->withSuccess('Signed in');
        }
        return redirect()->route('home.show');
    }
    public function register()
    {
        return view('guest.register');
    }

    public function registerRequest(Request $request)
    {
        $new = $request->validate([
            'login' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

//        dd($new);
        $new['password'] = bcrypt($request->get('password'));
        $user = new User();

        $user->create($new);

        return redirect()->route('login');
    }

}
