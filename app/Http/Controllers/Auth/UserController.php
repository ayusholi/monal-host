<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\UserRegisterRequest;
use App\Mail\AccountCreatedMail;

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

      /**
    * Handle Social login request
    *
    * @return response
    */
   public function socialLogin($social)
   {
       return Socialite::driver($social)->redirect();
   }
   /**
    * Obtain the user information from Social Logged in.
    * @param $social
    * @return Response
    */
   public function handleProviderCallback($social)
   {

        $userSocial = Socialite::driver($social)->stateless()->user();

       // Check if the User exists on our system
       $user = User::where(['provider_id' => $userSocial->getId()])->first();

        /**
         * If the User exits already then proceed to login
         * If the User does not exits then create the User and Login
         */
       if($user){
           Auth::login($user);
           return redirect()->route('user.dashboard');
       } else {
           $email = $userSocial->getEmail();
           $user = User::where('email', $email)->first();
           if($user) {
               return redirect()->route('login')->withErrors(["email_exists" => "Email already exists. Please try to log in."]);
           }
           $username = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $userSocial->getName()));
           $username_creator = User::where('username', $username)->first();
           if($username_creator) {
               $username = $username . "-" . mt_rand(10000, 99999);
           }
           $data = [
               "email" => $email,
               "username" => strtolower(preg_replace('/\s*/', '', $username)),
               'provider_id' => $userSocial->getId(),
               'provider' => $social,
               'email_verified_at' => Carbon::now(),
           ];

           $full_name = $userSocial->getName();
           $full_name_array = explode(" ", $full_name);
           $data["first_name"] = $full_name_array[0];
           $data["last_name"] = end($full_name_array);

           if(count($full_name_array) > 2)
           {
               $data["middle_name"] = $full_name_array[1];
           }

           $user = User::create($data);

            Auth::login($user);

            // $user->notify(new AccountCreatedMail($user->first_name));

           return redirect()->route('user.dashboard');
       }
   }
}
