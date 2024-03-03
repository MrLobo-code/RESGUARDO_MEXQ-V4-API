<?php

namespace App\Http\Controllers;

use App\Models\Admin_user;

class usersController extends Controller
{
    public function getUsers()
    {
        $users = Admin_user::all();
        return response()->json($users, 200);
    }
}
