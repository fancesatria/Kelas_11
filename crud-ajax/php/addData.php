<?php

    include('connection.php');

    $idkategori = $_POST['idkategori'];
    $menu = $_POST['menu'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    $sql = mysqli_query($connection, "INSERT INTO tblmenu VALUES (null,'$idkategori','$menu','$gambar','$harga')" );
        //script utk umpan balik
        if($sql) {
            $result['status'] = '1';
            $result['msg'] = 'Insert data berhasil';

        } else {
            $result['status'] = '0';
            $result['msg'] = 'Insert data gagal!';
        }
        echo json_encode($result);

?>


