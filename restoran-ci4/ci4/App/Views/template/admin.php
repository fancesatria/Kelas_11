<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" >
    <title>Admin Page</title>
</head>
<body>

    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= base_url('/admin') ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item mt-2 ms-4">User : </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link" aria-current="page" href="#">
                                        <?php 
                                            if (!empty(session()->get('user'))) {
                                                echo session()->get('user');
                                        } ?>
                                    </a>
                                </li>

                                <li class="nav-item mt-2 ms-4">Email : </li>
                                <li class="nav-item mt-2 ms-1 me-4">
                                    <?php 
                                        if (!empty(session()->get('email'))) {
                                                echo session()->get('email');
                                        }
                                    ?>
                                </li>

                                <li class="nav-item mt-2 ms-4">Level : </li>
                                <li class="nav-item mt-2 ms-1 me-4">
                                    <?php 
                                        if (!empty(session()->get('level'))) {
                                                echo session()->get('level');
                                                $level = session()->get('level');
                                        }
                                    ?>
                                </li>

                                <li class="nav-item mt-2 ms-1 me-4">
                                    <a href="<?= base_url('admin/login/logout') ?>" class="text-decoration-none">Logout</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">

                        <?php if($level === "Admin"): ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>" class="text-decoration-none"> Kategori </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>" class="text-decoration-none"> Menu </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>" class="text-decoration-none"> Pelanggan </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>" class="text-decoration-none"> Order </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>" class="text-decoration-none"> Order Detail </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>" class="text-decoration-none"> User </a></li>
                        <?php endif; ?>


                        <?php if($level === "Kasir"): ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>" class="text-decoration-none"> Order </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>" class="text-decoration-none"> Order Detail </a></li>
                        <?php endif; ?>


                        <?php if($level === "Koki"): ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>" class="text-decoration-none"> Order Detail </a></li>
                        <?php endif; ?>


                        <?php if($level === "Gudang"): ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>" class="text-decoration-none"> Order Detail </a></li>
                        <?php endif; ?>
                    
                    </ul>

                    
                </div>
            </div>
            <div class="col-8 px-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

</body>
</html>