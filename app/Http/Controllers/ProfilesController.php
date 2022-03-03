<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        return view('profile', [
            'user' => User::findOrFail($user)
        ]);
    }
}
