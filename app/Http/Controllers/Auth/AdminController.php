<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     *  create a constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }

    /**
     * Show the login form.
     *
     * @return view
     */
    public function showLoginForm()
    {
        return view('auth.admin.show-login-form');
    }

    /**
     * Validate a admin credentials
     *
     * @param App\Http\Request\AdminLoginRequest $request
     * @return view
     */
    public function login(AdminLoginRequest $request)
    {
       $remember_me = $request->has('remember_me') ? true : false;

       $admin = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me);

       if($admin) {
            return redirect()->route('admin.dashboard');
       }

        return back()->withErrors(['msg' => 'Invalid Credentials!']);
    }

    /**
     * logout the current logged in user
     *
     * @return void
     */

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }

}
