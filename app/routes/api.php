<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\dummyAPI;
use App\Http\Controllers\API\DevlceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('user', [UserController::class, 'index']);
Route::apiResource('/users', UserController::class);

Route::get('list/{id?}', [DevlceController::class, 'listParams']);
Route::post('add', [DevlceController::class, 'add']);
Route::put('update', [DevlceController::class, 'update']);
Route::get('search/{name}', [DevlceController::class, 'search']);
Route::get('data', [dummyAPI::class, 'getdata']);