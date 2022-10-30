<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\{ArticleController, CategoryController, AuthController};
// use App\Http\Controllers\Api\v1\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json([
        'message' => 'Authenticated.',
        'data'    => $request->user(),
    ], 200);
});


Route::post('/login', [AuthController::class, 'login']);

// Route::prefix('/api/v1/')->group(function () {
Route::middleware('auth:api')->group(function () {
    //auth
    Route::resource('/articles', ArticleController::class);
    Route::resource('/categories', CategoryController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});
// });
// Route::middleware('auth:api')->get('/user', [PassportController::class,'users']);
