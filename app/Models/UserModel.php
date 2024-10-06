<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    public $timestamps = 'false';
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';// User_id tidak terbaca ketika saya dd($user) yang terbaca id. Jadi saya mengganti nama kolom menjadi id
    protected $fillable = ['user_id','level_id','username','nama','password'];

    public function getIdAttribute()
    {
        return strtoupper($this->attributes['user_id']);
    }

    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class);
    }

}
