<h3>Registrasi Pelanggan</h3>

<div>
    <form action="" method="post">
        <div class="mb-3 w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="isi pelanggan" class="form-control" >
        </div>

        <div class="mb-3 w-50">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="isi alamat" class="form-control" >
        </div>

        <div class="mb-3 w-50">
            <label for="">Telepon</label>
            <input type="text" name="telp" required placeholder="isi telepon" class="form-control" >
        </div>

        <div class="mb-3 w-50">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="isi email" class="form-control" >
        </div>

        <div class="mb-3 w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="isi password" class="form-control" >
        </div>

        <div class="mb-3 w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="isi password" class="form-control" >
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-warning">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1)";
           
            header("location:?f=home&m=info");
            $db->runSQL($sql);
        }else {
            echo "<h3>Pasword tidak cocok dengan konfirmasi</h3>";
        }
        
    }

?>