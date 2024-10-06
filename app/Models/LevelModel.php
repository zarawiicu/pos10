<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';
    protected $primaryKey = 'level_id';// User_id tidak terbaca ketika saya dd($user) yang terbaca id. Jadi saya mengganti nama kolom menjadi id
    protected $fillable = ['level_id','level_kode','level_nama'];
}
