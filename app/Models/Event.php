<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];


    protected $casts = [
        'tanggal' => 'datetime',
        'materi' => 'array',
    ];
}
