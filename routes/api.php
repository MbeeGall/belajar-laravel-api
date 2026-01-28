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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API Laravel siap dipakai'
    ]);
});

Route::get('/users', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Rifqi'],
        ['id' => 2, 'name' => 'Budi'],
        ['id' => 3, 'name' => 'Siti'],
    ]);
});

Route::post('/users', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'name' => $request->name,
        'email' => $request->email
    ]);
});