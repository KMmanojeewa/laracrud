<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $id): View
    {

        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function list(): View
    {

        return view('user.list', [
            'users' => User::all()
        ]);
    }
}
