<?php

    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

    if (!isset($_SESSION['user'])) {
        header("location:login.php");
    }
    if (isset($_GET['log'])) {
        session_destroy();
        header("location:index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device=width,initial-scale-1.o">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Admin Page | Aplikasi Restoran SMK</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>

    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="mt-2 mb-2 "><a href="index.php" class="text-decoration-none">Admin Page</a></h3>
                </div>

                <div class="col-md-9">
                    
                        <div class="float-end mt-2 me-4"><a  class="text-decoration-none" href="?log=logout">Logout</a></div>
                        <div class="float-end mt-2 mb-2 me-4">user : <a  class="text-decoration-none" href="?f=user&m=updateuser&id=<?php echo $_SESSION['iduser'] ?>"> <?php echo $_SESSION['user'] ?> </a> </div>
                        <div class="float-end mt-2 me-4 me-4">Level : <?php echo $_SESSION['level'] ?> </div>


                </div>
            </div>


            <div class="row mt-5">
            
                <div class="col-md-3">
                    
                    <ul class="nav flex-column">

                        <?php 
                        
                            $level = $_SESSION['level'];
                            switch ($level) {
                                case 'Admin':
                                    echo '
                                        <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">Kategori</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li>
                                    ';
                                    break;

                                case 'Kasir';
                                    echo '
                                        <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                                    ';
                                    break;

                                case 'Koki';
                                    echo '
                                
                                        <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                                    ';
                                    break;
                                
                                default:
                                    echo 'Tidak ada menu';
                                    break;
                            }
                        
                        ?>


                        
                    </ul>
                </div>

                <div class="col-md-9">
                    <?php
                        if (isset($_GET['f']) && isset($_GET['m'])) {
                           $f = $_GET['f'];
                           $m = $_GET['m'];

                           $file = '../' . $f . '/' . $m . '.php';

                           require_once $file;
                        }

                    ?>
                </div>
            </div>

            <div class="row mt-5">
                    <div class="col">
                        <p class="text-center">2021 copyright@fancesatria.com</p>
                    </div>
            </div>
        </div>

    </body>
</html> 