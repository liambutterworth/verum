<?php

namespace App\Http\Controllers\Api;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::paginate();
    }
}
