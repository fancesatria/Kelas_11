<?php

    include 'connection.php';
    $idmenu = $_POST['idmenu'];
    $sql = mysqli_query($connection, "DELETE FROM tblmenu WHERE idmenu='$idmenu'" );

    if ($sql) {
        $result['status'] = '1';
        $result['msg'] = 'Data berhasil dihapus !';

    } else {
        $result['status'] = '0';
        $result['msg'] = 'Data gagal dihapus !';
    }

    echo json_encode($result);
?>