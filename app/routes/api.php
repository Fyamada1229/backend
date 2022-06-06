<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\dummyAPI;
use App\Http\Controllers\API\GetDataController;
use App\Http\Controllers\API\DevlceController;
use App\Http\Controllers\API\MenberController;
use App\Http\Controllers\API\FileController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::get('index', [DevlceController::class, 'index']);
    // Route::post('add', [DevlceController::class, 'add']);
    // Route::put('update', [DevlceController::class, 'update']);
    // Route::get('search/{name}', [DevlceController::class, 'search']);
    // Route::delete('delete/{id}', [DevlceController::class, 'delete']);
    // Route::post('save', [DevlceController::class, 'save']);
});

//Route::post("upload", [FileController::class, 'upload']);
// Route::get('user', [UserController::class, 'index']);
Route::apiResource('/users', UserController::class);
Route::post("login", [UserController::class, 'index']);


Route::get('list', [DevlceController::class, 'index']);


Route::get('getdata', [GetDataController::class, 'gataData']);
Route::apiResource('menber', MenberController::class);