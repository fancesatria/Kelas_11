<?php

    $connection = mysqli_connect('localhost', 'root', '', 'dbrestoran');
    if (mysqli_connect_errno()) {
        echo 'Koneksi Database Gagal'. mysqli_connection_error();
    }

?>