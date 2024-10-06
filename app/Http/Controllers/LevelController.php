<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index(){
        //DB::insert('insert into m_level(level_kode, level_nama, created_at, updated_at) values(?, ?, ?, ?)', ['CUS', 'Pelanggan', now(), now()]);

        //$row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'CUS']);

        //$row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);

        $data = DB::select('select * from m_level');
        return view('level')->with('data', $data);
    }
}
