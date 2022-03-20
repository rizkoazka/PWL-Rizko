<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            "title" => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'min:5', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        // Enkripsi Password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi berhasil! Silahkan login');

        return redirect('/login')->with('berhasil', 'Registrasi berhasil! Silahkan login');
    }
}
