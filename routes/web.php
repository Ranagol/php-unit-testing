<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//This route returns a JSON response
Route::get('/json-test', function () {
    return response()->json([
        'name' => 'Jone',
        'updated' => true,
    ]);
});

