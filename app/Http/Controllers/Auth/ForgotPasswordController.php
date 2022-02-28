<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(){
        return view('auth.user.forgotpassword');
    }

    public function submitForgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        // generate token
        $token=Str::random(80);


        // store email and token
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        // send link to mail
        Mail::send('emails.forgotpasswordlink',['token'=>$token], function ($message) use($request) {
            $message->to($request->email);
            $message->subject('Reset Password Link');
        });

        return back()->with('success','Reset password link has been sent to your email.Check it');
    }

    public function forgotPasswordLink($token)
    {
        return view('auth.user.forgotpasswordlinkform',['token'=>$token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|min:5|max:20',
              'password_confirmation' => ['same:password']
        ]);

        // check data is available or not
        $resetpassword=DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token
        ])->first();

        if(!$resetpassword){
            return back()->with('error','Invalid token');
        }

        $changepassword=User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);

        // delete table after password reset
        DB::table('password_resets')->where(['email'=>$request->email])->delete();
        

        return redirect('auth/login')->with('success','Your password change successfully');

    }
}
