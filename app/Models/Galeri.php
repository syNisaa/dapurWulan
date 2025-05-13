<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable =['id', 'gambar', 'id_jenis'];

    public function jenisProduk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis', 'id');
    }
}