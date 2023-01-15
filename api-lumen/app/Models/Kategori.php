<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //utk mengetahui kolom mana yang bisa diisi
    protected $fillable = ['kategori', 'keterangan'];
}
