<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validation
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'Molimo Vas da unesete vas email.',
            'password.required' => 'Molimo Vas da unesete vasu sifru.',
        ];

        $request->validate($rules, $messages);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard')->with('name', auth()->user()->name);
        } else {
            return back()->with('status', 'Invalid login  details');
        }
    }
}
