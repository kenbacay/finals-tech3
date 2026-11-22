<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::firstOrNew();

        return view('profile.index', compact('user'));
    }
}