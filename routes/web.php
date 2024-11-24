<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
    // return env('APP_NAME');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/san_pham', function () {
    return view('product');
});

Route::get('/food', function () {
    return ['sấ','áassa','âssa'];
});

Route::get('/json', function () {
    return response()->json([
        'name' => 'sdasdsa',
        'dsdsads' => 'dsadsadsa'
     ]);
});

Route::get('/test', function () {
    $user = new User();
    dd($user);
});