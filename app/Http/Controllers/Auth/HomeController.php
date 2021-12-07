<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    use Authenticatable;

    protected $redirectTo = 'dashboard.show';

    public function __construct() {
        $this->middleware('auth');
    }

    protected function redirectTo($request)
    {
        return route('login');
    }


    public function show()
    {
        return redirect()->route('dashboard.show');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect()->route('home.show');
    }
}
