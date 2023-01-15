<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //utk mengetahui kolom mana yang bisa diisi
    protected $fillable = ['idkategori', 'menu', 'gambar', 'harga'];
}


?>
