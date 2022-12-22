<?php

use App\Http\Controllers\TrenerController;
use App\Http\Controllers\PlesController;
use App\Http\Controllers\AutfController;
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

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);
Route::get('trener', [TrenerController::class, 'index']);
Route::get('trener/{trener}', [TrenerController::class, 'show']);
Route::get('ples', [PlesController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::put('trener/{trener}', [TrenerController::class, 'update']);
    Route::delete('trener/{trener}', [TrenerController::class, 'destroy']);
    Route::delete('ples/{ples}', [PlesController::class, 'destroy']);
    Route::post('logout', [AutfController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
