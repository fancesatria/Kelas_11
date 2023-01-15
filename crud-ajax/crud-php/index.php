<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD WITH AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>CRUD WITH AJAX</h1>
    
    <h2>Form Insert</h2>
    <div class="col-4">
        <?php include 'php/AddData.php' ?>
    </div>

    <hr>
    <br>
    <div class="col-8">
    <table class="table w-60">
        <?php 
            include 'connection.php';
            $sql = mysqli_query($connection, "SELECT * FROM tblmenu");
            $result = array();
            while ($fetchData = mysqli_fetch_array($sql)) {
                $result[] = $fetchData;
            }
            echo json_encode($result);
            $no=1; 
        ?>
        <thead>
            <td>No</td>
            <td>Id Kategori</td>
            <td>Menu</td>
            <td>Harga</td>
            <td>Gambar</td>
            <td>Edit</td>
            <td>Delete</td>
        </thead>
            
        <tbody>
            <?php if (!empty($result)) { ?>
                <?php foreach ($result as $r): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $r['idkategori'] ?></td>
                    <td><?php echo $r['menu'] ?></td>
                    <td><?php echo $r['harga'] ?></td>
                    <td><?php echo $r['gambar'] ?></td>
                    <td><button class="btn-primary"><a class="link-light" href="php/deleteData.php?id=<?php echo $r['idmenu'] ?>">Delete</a></button></td>
                    <td><button class="btn-danger"><a class="link-light" href="php/ubahData.php?id=<?php echo $r['idmenu'] ?>">Update</a></button></td>
                </tr>
                <?php endforeach ?>
                <?php } ?>
        </tbody>
    </table>
    </div>
    
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
</body>
</html>