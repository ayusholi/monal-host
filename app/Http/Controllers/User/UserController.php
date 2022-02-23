<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getServices()
    {
        $user = Auth::user();
        $services = $user->userServices;
        return view('auth.user.my_services', compact('services'));
    }
}
