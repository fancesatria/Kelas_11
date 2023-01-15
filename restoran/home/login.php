<div class="row">
            <div class="col-4 mx-auto mt-4">

                <div>
                    <form action="" method="post">

                        <div>
                            <h3>Login Pelanggan</h3>
                        </div>

                        <div class="mb-3 ">
                            <label for="">Email</label>
                            <input type="email" name="email" required placeholder="Masukkan email" class="form-control" >
                        </div>

                        <div class="mb-3 ">
                            <label for="">Password</label>
                            <input type="password" name="password" required placeholder="Masukkan password" class="form-control" >
                        </div>
                        
                        <div>
                            <input type="submit" name="login" value="login" class="btn btn-warning">
                        </div>
                    </form>
                </div>

            </div>
</div>


<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";

        $count = $db->rowCOUNT($sql);

        if($count == 0){
            echo "<center><h3>Email atau Password salah</h3></center>";
        }else{
            $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
            $row = $db->getItem($sql);

            $_SESSION['pelanggan']=$row['email'];
            $_SESSION['idpelanggan']=$row['idpelanggan'];

            header("location:index.php");
        }

        
    }

?>