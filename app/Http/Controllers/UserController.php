<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $user)
    {
        $user = User::where('id', $user->id)->first();
        $products = $user->product;
        return view('users.show', [
            'user' => $user,
            'products' => $products,
        ]);

    }
}
