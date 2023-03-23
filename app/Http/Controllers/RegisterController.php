<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }
    public function store(Request $request)
    {
        $inputData =  $request->validate([
            'name' => 'required|max:225',
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'email' => 'required|email:dns|min:4|unique:users',
            'password' => 'required|min:8|max:225',
        ]);
        // $inputData['password'] = bcrypt($inputData['password']);
        $inputData['password'] = Hash::make($inputData['password']);
        // return request()->all();
        User::create($inputData);
        // $request->session()->flash('success', 'Registration successfully..!');
        return redirect('/register')->with('success', 'Registration successfully..!');
    }
}
