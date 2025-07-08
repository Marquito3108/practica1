<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\productoscontroller;

Route::get('/', indexcontroller::class);



Route::controller(productoscontroller::class)->group(function(){
    Route::get('productos',"index");

    Route::get('productos/crear',"create");

    Route::get('productos/{product}',"show");


});