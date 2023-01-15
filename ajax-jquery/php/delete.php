<?php 

    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data,true);

    $idpelanggan = $idpelanggan['idpelanggan'];


    if (!empty($idpelanggan)) {
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo "Penghapusan data berhasil";
        } else {
            echo "Penghapusan data gagal";
        }

    } else {
        echo "Data belum dipilih";
    }

    

?>