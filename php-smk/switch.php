<?php 

    // MATERI SWITCH


    // 1. SWITCH TIPE DATA INT
    //  $hari = 1;

    //  switch ($hari) {
    //      case 1:
    //          echo 'Minggu';
    //          break;

    //      case 2:
    //          echo 'Senin';
    //          break;

    //      case 3:
    //         echo 'Selasa';
    //         break;
        
    //      default:
    //          echo 'Hari belum dibuat';
    //          break;
    // }

    // echo '<br>';

    // 2. SWITCH TIPE DATA STRING
    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda memilih tambah';
            break;
        
        case 'ubah':
            echo 'Anda memilih ubah';
            break;

        case 'hapus':
            echo 'Anda memilih hapus';
            break;
        
        default:
            echo 'Pilihan belum tersedia';
            break;
    }

?>