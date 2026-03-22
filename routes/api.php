<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('ping', function () {
    return response()->json(['message' => 'PR test workflow']);
});

Route::get('pong', function () {
    return response()->json(['message' => 'pong pong!']);
});
// PR checks test
