<?php

namespace App\Http\Controllers\Api;

use App\Models\Session;

class SessionController extends Controller
{
    public function index()
    {
        return Session::paginate();
    }
}
