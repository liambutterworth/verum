<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => [], // 'auth:api'
], function() {
    Route::apiResource('characters', 'CharacterController');
    Route::apiResource('campaigns', 'CampaignController');
    Route::apiResource('sessions', 'SessionController');
    Route::apiResource('users', 'UserController');
});
