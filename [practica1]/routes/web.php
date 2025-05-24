<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\productoscontroller;


Route::get('/', indexcontroller::class);

Route::get('/productos',[productoscontroller::class, "index"]);

Route::get('/Productos/crear',[productoscontroller::class,"create"]);

Route::get('Productos/{product}',[productoscontroller::class,"show"]);