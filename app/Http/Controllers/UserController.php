<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('user.user', [
            "id" => request('id'),
            "name" => request('name')
        ]);
    }
}
