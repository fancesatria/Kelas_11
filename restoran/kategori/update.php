<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tblkategori WHERE idkategori=$id";

        $row = $db->getItem($sql);
    }

?>



<h3>Update Kategori</h3>
<div>
    <form action="" method="post">
        <div class="mb-3 w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori'] ?>" class="form-control" >
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-warning">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tblkategori SET kategori =  '$kategori' WHERE idkategori = $id";
        
        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }

?>