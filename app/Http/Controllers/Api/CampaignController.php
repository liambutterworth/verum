<?php

namespace App\Http\Controllers\Api;

use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        return Campaign::paginate();
    }
}
