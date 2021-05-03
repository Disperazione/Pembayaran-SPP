<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $guard = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class, 'spp_id');
    }
}
