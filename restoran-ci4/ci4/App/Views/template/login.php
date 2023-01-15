<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" >
    <title>Login Page</title>
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-4 mx-auto">

                <span>
                    <h1 class="text-center">Login</h1>
                </span>

                <form action="<?= base_url('/admin/login') ?>" method="post">

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <!-- MEMBUAT ALERT -->
                    <div class="col">
                        <?php 
                            if(!empty($info)){
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $info;
                                echo '</div>';
                            }
                        ?>
                    </div>

                    <input class="btn btn-success" type="submit" name="login" value="Login">
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>