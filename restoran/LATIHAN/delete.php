<?php 

    require_once "../function.php";


    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location : http://localhost:8080/titip-utk-htdocs/php-smk/restoran/kategori/select.php")
?>