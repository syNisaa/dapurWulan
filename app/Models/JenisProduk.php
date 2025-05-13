<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class JenisProduk extends Model
{
    protected $table = 'jenis_produks';
    protected $fillable =['id','nama_jenisproduk'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_jenis', 'id');
        // id_jenis = foreign key di tabel produk
        // id = primary key di tabel jenis
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'id_jenis', 'id');
        // id_jenis = foreign key di tabel produk
        // id = primary key di tabel jenis
    }

}