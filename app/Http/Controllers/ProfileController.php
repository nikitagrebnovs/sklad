<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::where('id', auth()->user()->getAuthIdentifier())->first();

        return (view('auth.profile.show', ['user' => $profile]));
    }
}
