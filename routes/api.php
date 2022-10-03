<?php

use Illuminate\Http\Request;

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
    return $request->user();
});

//PARTICIPANTES
Route::get('participantes', [App\Http\Controllers\ParticipanteController::class, 'index']);
Route::post('participantes/crear', [App\Http\Controllers\ParticipanteController::class, 'store']);
Route::get('participantes/{participante}', [App\Http\Controllers\ParticipanteController::class, 'show']);
Route::put('participantes/{participante}', [App\Http\Controllers\ParticipanteController::class, 'update']);
Route::delete('participantes/{participante}', [App\Http\Controllers\ParticipanteController::class, 'destroy']);