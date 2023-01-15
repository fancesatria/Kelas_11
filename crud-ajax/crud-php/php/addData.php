<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr><td>Id Menu </td> <td><input type="text" class="txt-idmenu form-control" name="idmenu" disabled></td></tr>
            <tr><td>Id Kategori </td> <td><input type="text" class="txt-idkategori form-control" name="idkategori" placeholder="Masukkan Id Kategori"></td></tr>
            <tr><td>Nama Menu </td> <td><input type="text" class="txt-menu form-control" name="menu" placeholder="Masukkan Menu"></td></tr>
            <tr><td>Gambar </td> <td><input type="text" class="txt-gambar form-control" name="gambar" placeholder="Masukkan Gambar"></td></tr>
            <tr><td>Harga </td> <td><input type="number" class="txt-harga form-control" name="harga" placeholder="Masukkan Harga"></td></tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn-tambah btn-primary" name="btn-tambah">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php
    
    include 'connection.php';
    if (isset($_POST['btn-tambah'])) {

        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $gambar = $_POST['gambar'];
        $harga = $_POST['harga'];

        $sql = mysqli_query($connection, "INSERT INTO tblmenu VALUES (null,'$idkategori','$menu','$gambar','$harga')" );
        
    }
    

?>


