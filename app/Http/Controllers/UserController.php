<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

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

    public function create(): View
    {

        return view('user.create');
    }

    public function save_user(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            echo '<pre>'.print_r('validator fail',1);die();
        } else {
            echo '<pre>'.print_r('validator pass',1);die();
        }
    }
}
