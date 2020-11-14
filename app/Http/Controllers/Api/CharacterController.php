<?php

namespace App\Http\Controllers\Api;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return Character::with('campaigns')->paginate();
    }
}
