<?php

use App\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\BasicCURDController;



Route::get('/about', function () {
    return view('AboutPage');
});

Route::get('/insert', function () {
    return view('insert');
});


Route::get('/', [AdminController::class, 'index']);

Route::get('/all', [ResultController::class, 'allSelect']);

Route::get('/onselect', [BasicCURDController::class, 'onSelect']);

Route::get('/retrive', [RetriveController::class, 'selectAllRows']);

Route::get('/retriveone', [RetriveController::class, 'selectOneRows']);

Route::get('/findrow', [RetriveController::class, 'selectfindRows']);








