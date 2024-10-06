<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserController $user)
{
    $user = UserModel::with('level')->get();
    //dd($user);
    return view('user', ['data' => $user]);
}

public function tambah(){
    return view('user_tambah');
}

public function tambah_simpan(Request $request){
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make('$request->password'),
        'level_id' => $request->level_id
    ]);

    return redirect('/user');
}

public function ubah($id){
    $user = UserModel::findOrFail($id);
    //dd($user);
    return view('user_ubah', ['data' => $user]);
}

public function ubah_simpan($id, Request $request){

    $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

    $user->save();

    return redirect('/user');
}

public function hapus($id){
    $user = UserModel::find($id);
    $user->delete();

    return redirect('/user');
}
}
// public function show(UserController $user)
// {
//     return view('user', compact('user'));
// }
// }

// public function index($user_id) {
//     $id = $user_id;
//     $user = UserModel::findOrFail(['id' => 1]);
//     return view('user', ['data' => $user]);
// }

