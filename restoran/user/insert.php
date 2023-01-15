<h3>Insert User</h3>

<div>
    <form action="" method="post">
        <div class="mb-3 w-50">
            <label for="">Nama user</label>
            <input type="text" name="user" required placeholder="isi user" class="form-control" >
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

        <div class="mb-3 w-50">
            <label for="">Level</label><br>
            <select name="level" id="">
                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>
            </select>
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-warning">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);
        $konfirmasi = hash('sha256', $_POST['konfirmasi']);
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
            header("location:?f=user&m=select");
            $db->runSQL($sql);
        }else {
            echo "<h3>Pasword tidak cocok dengan konfirmasi</h3>";
        }
        
    }

?>