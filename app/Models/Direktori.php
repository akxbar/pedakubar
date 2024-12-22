<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Direktori extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'multi_image' => 'array',
    ];


    public function kategori_direktori()
    {
        return $this->belongsTo(KategoriDirektori::class);
    }
}
