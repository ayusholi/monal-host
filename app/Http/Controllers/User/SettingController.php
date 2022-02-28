<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Requests\UserSettingRequest;
use App\Rules\CheckOldPassword;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function userSetting(){
        $getuser=Auth()->user();
        // dd($getuser);
        return view('user.dashboard.setting.index',compact('getuser'));

    }

    public function updateSetting(UserSettingRequest $request)
    {
        $updateuser=Auth()->user();
        $updateuser->update($request->all());
        return redirect()->back()->with('success','Your Profile Update Successfully');
    }

    // change password

    public function changePassword(Request $request)
    {
      $request->validate([
          'old_password' => ['required', new CheckOldPassword],
          'new_password'=>'required|min:5|max:20',
          'new_confirm_password' => ['same:new_password']
      ]);

      User::find(Auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
      return back()->with('success','Password Change Successfully');
    }
}
