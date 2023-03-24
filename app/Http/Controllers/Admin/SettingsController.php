<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    /**
     * Return view for Updating Settings
     */
    public function edit()
    {
        $user = Auth::guard('admin')->user();

        $admin = Admin::find($user->id);

        return view('admin.settings.index', compact('admin'));
    }

    public function update(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $request->validate([
            'full_name' => 'required|min:3|max:250',
            'email' => "required|email|unique:admins,email,$user->id"
        ]);

        $admin = Admin::find($user->id);

        $admin->update([
            'full_name' => $request->full_name,
            'email' => $request->email
        ]);

        return back();
    }
}
