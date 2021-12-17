<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;

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

// Create user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
// Login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Get logged user data
    Route::get('/profile', function(Request $request) {
        return $request->user();
    });
    // Get users by ID
    Route::get('/user/{id}', [App\Http\Controllers\API\UserController::class, 'user']);
    // Logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
