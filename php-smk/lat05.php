<?php 
    // PENGUJIAN IF

    $tanggal = 3;

    // $hasil = $tanggal < 32;

    // 
    //     else {
    //         echo 'salah';
    //     }
    // }
    // else{
    //     echo 'salah';
    // }

    // echo '<br>';


    $nilai = 150;
    
    // if ($nilai <= 100) {
    //     if ($nilai >= 0) {
    //         echo 'nilai benar';
    //     }
    //     else {
    //         echo 'nilai salah';
    //     }
    // }
    // else {
    //     echo 'nilai salah';
    // }
    // UNTUK MENYINGKATNYA KITA BISA MENGGUNAKAN OPERATOR AND (&&)

    // if ($nilai <= 100 && $nilai >= 0) {
    //     echo 'Nilai yang dimasukkan benar';
    // }else {
    //     echo 'nilai yang dimasukkan salah';
    // }

    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Nilai yang dimasukkan salah';
    }else {
        echo 'nilai yang dimasukkan benar';
    }
?>