<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $guarded = ['id'];


    protected $casts = [
        'tanggal' => 'datetime',
    ];



    // public function getDateAttribute()
    // {
    //     return $this->datetime->format('Y-m-d'); // Mengambil tanggal
    // }

    // public function getTimeAttribute()
    // {
    //     return $this->datetime->format('H:i:s'); // Mengambil waktu
    // }

}
