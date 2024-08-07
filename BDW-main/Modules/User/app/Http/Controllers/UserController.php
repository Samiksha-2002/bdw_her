<?php

namespace Modules\User\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('user::admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new User;
        return view('user::admin.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        //return $request;
        // $request->validate([
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'gender' => 'required',
        //     'dob' => 'required|date',
        // ]);
    
        // $user = User::create($request->all());
    
        // return redirect()->route('users')->with('success', 'User created successfully');


         $user = new User();
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->first_name = $request->first_name;
         $user->last_name = $request->last_name; 
         $user->gender = $request->gender;
         $user->dob = $request->dob;
         $user->save();
         return redirect()->route('admin.users')->with('success', 'User created successfully');
    }
    public function store_blocke(Request $request, $id)
    {
        //return $request;
        $blocke = User::findOrFail($id);

        $blocke->blocked_reason = $request->blocked_reason;
        $blocke->status = 2;
        $blocke->save();
        return redirect()->route('admin.users')->with('success', 'User Bolacked successfully');

    }
    public function un_blocke(Request $request, $id)
    {
        $unblocke = User::findOrFail($id);
        // $blocke->blocked_reason = null;
        $unblocke->status = 1;
        $unblocke->save();
        return redirect()->route('admin.users')->with('success', 'User UnBolacked successfully');

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user::admin.user-detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('user::admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)//: RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6', // You might want to make the password optional
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required',
            'dob' => 'required|date',
        ]);
    
        $user = User::findOrFail($id);
    
        // Update user attributes
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
    
        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    } 
}
