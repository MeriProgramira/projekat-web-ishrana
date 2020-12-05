<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegistarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        //dd(auth()->user());
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validation
        $rules = [
            'username' => 'required|max:30',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ];
        $messages = [
            'username.required' => 'Molimo Vas da unesete vase korisnicko ime.',
            'name.required' => 'Molimo Vas da unesete vase  ime.',
            'email.required' => 'Molimo Vas da unesete vas email.',
            'password.required' => 'Molimo Vas da unesete vasu sifru.',
            'password.confirmed' => 'Ponovo unesena sifra ne odgovara pocetnoj sifri.'
        ];

        $request->validate($rules, $messages);

        //Create user
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin_role' => false,
        ]);
        //dd($request);

        //auth()->attempt($request->only('email', 'password'));
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);
        }

        //return redirect()->route('dashboard');
    }
}
