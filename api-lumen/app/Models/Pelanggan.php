<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //utk mengetahui kolom mana yang bisa diisi
    protected $fillable = ['pelanggan', 'alamat', 'telp'];
}
