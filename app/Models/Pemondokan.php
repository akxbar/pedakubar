<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemondokan extends Model
{
    protected $guarded = ['id'];
    protected $casts = ['image' => 'array'];


    public function tempat_pemondokan()
    {
        return $this->belongsTo(TempatPemondokan::class);
    }
}
