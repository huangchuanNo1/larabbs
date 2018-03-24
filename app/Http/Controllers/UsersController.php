<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //个人 页面
    public function show(User $user)
    {
        //var_dump($user);die;
        return view('users.show', compact('user'));
    }
}
