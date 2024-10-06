<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view('product/food-beverage');
    }

    public function beauty (){
        return view('product/beauty-health');
    }

    public function care (){
        return view('product/home-care');
    }

    public function baby(){
        return view('product/baby-kid');
    }
}
