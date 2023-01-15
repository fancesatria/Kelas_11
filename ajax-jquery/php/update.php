<?php 

    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $dataPelanggan = json_decode($data,true);

    $idpelanggan = $dataPelanggan['idpelanggan'];
    $pelanggan = $dataPelanggan['pelanggan'];
    $alamat = $dataPelanggan['alamat'];
    $telp = $dataPelanggan['telp'];

    if (!empty($pelanggan) and !empty($alamat) and !empty($telp)) {
        $sql = "UPDATE tblpelanggan SET pelanggan = '$pelanggan', alamat = '$alamat', telp = $telp WHERE idpelanggan=$idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo "Data berhasil diupdate";
        } else {
            echo "Update data gagal";
        }

    } else {
        echo "Data belum diisi";
    }

    

?>