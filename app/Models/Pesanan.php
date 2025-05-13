<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Pesanan extends Model
{
    protected $table = 'pesanans';
    protected $fillable =['id', 'nama_pelanggan' ,'produk_pesanan','total_harga','tanggal_pesanan','status','alamat','metode_pembayaran','tanggal_pengambilan'];

}