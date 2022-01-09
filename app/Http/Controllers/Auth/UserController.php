<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{
    /**
     *  create a constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return view
     */
    public function register()
    {
        return view('auth.user.register');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return void
     */
    public function store(UserRegisterRequest $request)
    {
        $hashPassword = Hash::make($request->password);

        User::create(array_merge($request->all(), ['password' => $hashPassword]));

        return redirect()->route('auth.login');
    }

    /**
     * Show the login form.
     *
     * @return view
     */
    public function showLoginForm()
    {
        return view('auth.user.login');
    }

    /**
     * Validate a user credentials
     *
     * @param App\Http\Request\UserLoginRequest $request
     * @return view
     */
    public function login(UserLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        $user = Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me);

        if($user) {
            return redirect()->route('user.dashboard');
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
         Auth::logout();

         return redirect()->route('auth.login');
     }




}
