<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Carbon\Carbon;

class AuthController extends Controller
{
    
    public function index_login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('auth/signin');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
    
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }
    
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
    
            if ($user->type == 'admin') {
                // Additional logic for admin login
                return redirect()->route('admin.dashboard')->with('message', 'Welcome, Admin!');
            }else{
                return redirect()->route('login')->with('message', 'Only, Admin login!');
            }
    
            //$now = Carbon::now();
            // $start_time = Carbon::parse($user->working_start_time)->subMinute(5);
            // $end_time = Carbon::parse($user->working_end_time);
            // if($now->between($start_time, $end_time)){
            //     // save attendance
            //     Attendance::create([
            //         'user_id' => $user->id,
            //         'date' => $now->format('Y-m-d'),
            //         'login_time' => $now->format('H:i:s'),
            //     ]);
            //     // Authentication successful
            //     return redirect()->route('dashboard'); 
            // } else {
            //     Auth::logout();
            //     return redirect()->route('auth.login')->with('error', 'You can only login during your working hours');
            // }
        }
    
        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }
    


    public function index_signup()
    {
         // Check if the user is already authenticated
    
        return view('auth/signup');
    }
    public function signup(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log in the newly registered user
        Auth::login($user);

        // Redirect to a dashboard or home page
        return redirect()->route('user.dashboard');
    }
    
    public function index_reset_password()
    {
        return view('auth/reset-password');
    }
    
    public function index_reset_password_confirmation()
    {
        return view('auth/reset');
    }

    public function reset_password(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? redirect()->route('auth.reset.password')->with('success', trans($response))
            : redirect()->route('auth.reset.password_confirmation')->withErrors(['email' => trans($response)]);
    }


    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.update-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function logout()
    {
        // $now = Carbon::now();
        // $user = auth()->user();

        // Attendance::where('user_id', $user->id)->orderBy('id', 'DESC')->limit(1)->update([
        //     'logout_time' => $now->format('H:i:s'),
        // ]);
        
        Auth::logout();

        
        return redirect('/');  
    }
    
}
