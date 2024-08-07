<?php

namespace Modules\User\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'dob' => 'required|date_format:Y-m-d',
            'gender' => 'required',
        ]);
    
        
        // Create a new user
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);
    
        $user = User::find($user->id);
        // Authenticate the user
        Auth::login($user);
    
        // Generate a token for the authenticated user
        $token = $user->createToken('auth-token')->plainTextToken;
    
        $user->token = $token;
    
        // Return the response with user data and token
        return response()->json([
            'message' => 'User registered successfully',
            'status' => 1,
            'data' => $user,
            'token' => $token,
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            if ($user->status == 1) {
                $token = $user->createToken('auth-token')->plainTextToken;
                $user->token = $token;
    
                return response()->json([
                    'message' => 'Successfully Login!',
                    'status' => 1,
                    'data' => $user
                ]);
            } elseif ($user->status == 2) {
                return response()->json(['message' => 'Your account is blocked. Reason: ' . $user->blocked_reason], 401);
            }
        }
    
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function update(Request $request)
    {

        $user = auth()->user();

        if($request->affirmation){
            $user->affirmation = $request->affirmation;
        }

        $user->save();
        return response()->json([
            'message' => 'Successfully updated',
            'status' => 1,
            'data' => null,
        ]);
    }
}
