<?php
    //mengambil satu data dulu
    include 'connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = mysqli_query($connection, "SELECT * FROM tblmenu WHERE idmenu = '$id' ");
        $result = mysqli_fetch_array($sql);
    }
    

?>


<h2>Edit Data</h2>
<form action="" method="post">
            <table 
                <tr><td>Id Menu </td> <td><input type="text" class="txt-idmenu" name="idmenu" value="<?php echo $result['idmenu'] ?>" disabled></td></tr>
                <tr><td>Id Kategori </td> <td><input type="text" class="txt-idkategori" name="idkategori" value="<?php echo $result['idkategori'] ?>"></td></tr>
                <tr><td>Nama Menu </td> <td><input type="text" class="txt-menu" name="menu" value="<?php echo $result['menu'] ?>"></td></tr>
                <tr><td>Gambar </td> <td><input type="text" class="txt-gambar" name="gambar" value="<?php echo $result['gambar'] ?>"></td></tr>
                <tr><td>Harga </td> <td><input type="number" class="txt-harga" name="harga" value="<?php echo $result['harga'] ?>"></td></tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn-tambah" name="simpan" value="simpan">Simpan Perubahan</button>
                    </td>
                </tr>
            </table>
        </form>


    
<?php

    include 'connection.php';
    if (isset($_POST['simpan'])) {
        $idmenu = $_POST['idmenu'];
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $gambar = $_POST['gambar'];
        $harga = $_POST['harga'];

        $sql = "UPDATE tblmenu SET idkategori=$idkategori, menu='$menu', gambar='$gambar', harga=$harga WHERE idmenu = $id";
        
        mysqli_query($connection, $sql);
        header('location:http://localhost/crud-ajax/crud-php');
    }
    


?>