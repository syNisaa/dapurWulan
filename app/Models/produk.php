<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable =['nama_produk', 'deskripsi', 'harga' ,'status_pesan','gambar','id_jenis'];
    public function jenis()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis', 'id');
    }

}