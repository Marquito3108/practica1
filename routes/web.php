<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\indexcontroller;
//use App\Http\Controllers\productoscontroller;




Route::get('/', function () {
    return "bienvenido a la pagina principal";
    
});

Route::get('/posts', function(){
    return "Aqui se mostraran todos los posts";
});


Route::get('/posts/{post}', function($post){
    return "Aqui se mostrara el post {$post}";
});




//Route::get('/', indexcontroller::class);



//Route::controller(productoscontroller::class)->group(function(){
 //   Route::get('productos',"index");

   // Route::get('productos/crear',"create");

 //   Route::get('productos/{product}',"show");


//});