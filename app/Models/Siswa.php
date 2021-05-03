<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guard = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'id_kelas');
    }
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'siswa_id','id');
    }
}
