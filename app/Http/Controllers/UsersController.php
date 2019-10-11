<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return dd($users);
    }
}
