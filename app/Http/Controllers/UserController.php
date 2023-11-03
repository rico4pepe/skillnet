<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //

    public function index()
    {
        //
        return view('/index');
    }

    public function register(Request $request){
        $request->validate([
            "fname" => 'required',
            "lname" => 'required',
            "username" => 'required',
            "email" => 'required|unique:users', // Check email uniqueness in students table
            "password" => 'required',
        ]);

         // Create a 'User' record with the provided email and password
         $user = User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    }

    public function loginuser(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only(trim('email'), trim('password'));

        if (Auth::guard('user')->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/sessions')
                ->withSuccess('You have successfully logged in!');
        }else{
                   throw ValidationException::withMessages(
                        ['email'=>'Invalid Credentials']
                    );
            }
    }
}
