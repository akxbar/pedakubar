<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenangungJawab extends Model
{
    protected $guarded = ['id'];
    protected $casts = ['image' => 'array'];

    public function pemondokan()
    {
        return $this->belongsTo(Pemondokan::class);
    }
}
