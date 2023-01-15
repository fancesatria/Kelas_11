<?php 

namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';
    protected $primaryKey = 'idpelanggan';
    protected $allowedFields = ['aktif'];


}

?>