<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Testimoni extends Model
{
    protected $table = 'testimonis';
    protected $fillable =['id', 'nama','nama_makanan', 'deskripsi' ,'status'];

}