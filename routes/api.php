<?php

use App\Http\Controllers\TrenerController;
use App\Http\Controllers\PlesController;
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
Route::get('trener', [TrenerController::class, 'index']);
Route::get('trener/{trener}', [TrenerController::class, 'show']);
Route::put('trener/{trener}', [TrenerController::class, 'update']);
Route::delete('trener/{trener}', [TrenerController::class, 'destroy']);

Route::get('ples', [PlesController::class, 'index']);
Route::delete('ples/{ples}', [PlesController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
