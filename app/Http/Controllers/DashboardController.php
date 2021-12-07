<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    use Authenticatable;

    protected $redirectTo = 'user.dashboard.show';

    public function show() {
        return view('dashboard');
    }
}
