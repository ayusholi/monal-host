<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getServices()
    {
        $user = Auth::user();
        $services = UserService::where('user_id', $user->id)->has('payment')->get();
        return view('auth.user.my_services', compact('services'));
    }

    public function getActiveServices()
    {
        $user = Auth::user();
        $services = UserService::where('user_id', $user->id)->whereHas("payment", function($query) {
            $query->where('status', Payment::$STATUS['SUCCESSFUL']);
        })->get();
        return view('auth.user.my_services', compact('services'));
    }

    public function getServiceDetail($id)
    {
        $user = Auth::user();
        $service = UserService::where('user_id', $user->id)->firstOrFail();
        return view('auth.user.service_detail', compact('service'));
    }

    public function newServices()
    {
        $services = Service::all();
        return view('auth.user.all_new_services', compact('services'));
    }
}
