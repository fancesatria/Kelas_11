<?php 

    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data,true);

    $idpelanggan = $idpelanggan['idpelanggan'];

    $sql = "SELECT * FROM tblpelanggan WHERE idpelanggan=$idpelanggan";
    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_assoc($result); // fetch assoc untuk mengambil sebaris data, jika lebih hrs pke while

    echo json_encode($row);

    // kiriman dari $data dipakai untuk ambil idpelanggan lalu dijalankan dg $sql, hasil resultnya lalu di fetch dg $row dan diinput dg json 

?>
