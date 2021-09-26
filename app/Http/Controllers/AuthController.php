<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SigninEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use DB;
use Log;

class AuthController extends Controller
{
    /**
     * Processes the login form
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     **/


    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', '=', $email)
            ->first();

        $user_password = DB::table('users')
        ->select('password')
        ->where('email', '=', $email)
        ->pluck('password');

        $valid = Hash::check($password, $user->password);

        if ($valid) {
            Auth::login($user);

            return redirect()->to('/home');

          }else{

            return redirect()->to('/')->with('error', 'Your phone number and password do not match');
          }

    }

    /**
     * Processes the actual login
     *
     * @param \Illuminate\Http\Request $request
     * @return redirect
     **/
    public function signIn(Request $request)
    {
       // Check if the URL is valid
    if (!$request->hasValidSignature()) {
        abort(401);
    }

    // Authenticate the user
    $user = User::findOrFail($request->user);
    Auth::login($user);

    if ($user->role ==  admin) {
       // Redirect to dashboard
    return redirect('/dashboard');
    }else{
       // Redirect to profile
    return redirect('/profile');
    }

   
    }

    /**
     * Processes the logout
     *
     * @param \Illuminate\Http\Request $request
     * @return redirect
     **/
    public function logout(Request $request)
    {
        // logout
    Auth::logout();

    // Redirect to homepage
    return redirect('/');
    }

    public function mobileSignIn(Request $request){
        // find the user for the email - or create it.
        $user = User::firstOrCreate(
            ['phone_number' => $request->post('phone_number')],
            ['name' => $request->post('email'), 'password' => Str::random()]
        );

        // create a signed URL for login
        $url = URL::temporarySignedRoute(
            'sign-in',
            now()->addMinutes(30),
            ['user' => $user->id]
        );

        // send the email
        Mail::send(new SigninEmail($user, $url));

        // inform the user
        return view('login-sent');
    }
    public function register(){
      return view('auth.register');
    }
    //function to logi(n user
    public function loginUser(Request $request){
      $request->validate([
        'email'=>'required|email',
        'password'=>'required',
      ]);
      $credentials=$request->only('email','password');
      if (Auth::attempt($credentials)) {
        // redirect user
        return redirect('/')->with('success','LoggedIn successfully!!');
      }
      return redirect('login')->with('error','Login failed!!');
    }

    public function createUserAccount(Request $request){
        $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
          'role'=>'required',
          'password'=>'required|min:6',
          'confirm'=>'required|same:password'
        ]);
        $data=$request->all();
        $user=$this->saveUserDetails($data);
        return redirect('/login')->with('success','Your account has been created successfully!!');
    }

    public function profile(){

    }

    public function saveUserDetails(array $data){
      return User::create([
        'name'=>$data['name'],
        'email'=>$data['email'],
        'role'=>$data['role'],
        'password'=>Hash::make($data['password'])
      ]);
    }
}
