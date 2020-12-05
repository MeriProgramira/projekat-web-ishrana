<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index($id)
    {

        $user = User::find($id);
        return view('dashboard', compact('user'));
    }
}
