<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Informasi extends Model
{
    protected $table = 'informasis';
    protected $fillable =['nama_toko', 'deskripsi', 'gambar' ,'email','no_telepon','deskripsi_toko','jam_buka','alamat'];

}