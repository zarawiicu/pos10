<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    
    public function user($id, $name) {;
        return view('user', compact('id', 'name'));
    }

    public function penjualan(){
        return view('penjualan');
    }
}
