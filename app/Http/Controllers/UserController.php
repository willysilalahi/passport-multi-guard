<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers()
    {
        $data = User::all();
        return response([
            'status' => true,
            'message' => 'Get All User Data',
            'data' => $data
        ]);
    }
}
