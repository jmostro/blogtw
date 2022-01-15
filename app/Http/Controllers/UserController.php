<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(User $id){
        $user = User::find($id)->first();
        return view('users.show', compact('user'));
    }
}
