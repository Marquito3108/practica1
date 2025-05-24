<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoscontroller extends Controller
{
    public function index(){
        return "seccion de productos ";
    }

    public function create(){
        return "Carrito activo";
    }

    public function show($product){
        return "el producto es: $product";
    }
}
