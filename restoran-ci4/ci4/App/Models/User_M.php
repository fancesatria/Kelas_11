<?php 

namespace App\Models;

use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbluser';
    protected $primaryKey = 'iduser';
    protected $allowedFields = ['user', 'email', 'password', 'level', 'aktif'];

    // UNTUK VALIDASI DATA
    protected $validationRules    = [
        'user'     => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
        'email'     => 'valid_email|is_unique[tbluser.email]'

    ];


    protected $validationMessages = [
        'user' => [
            'alpha_numeric_space' => 'Data harus berupa huruf atau angka',
            'min_length' => 'Minimal 3 huruf',
            'is_unique' => 'Pengguna sudah ada' 
        ],

        'email' => [
            'alpha_numeric' => 'Email salah',
            'is_unique' => 'email sudah ada' 
        ]
    ];

}

?>