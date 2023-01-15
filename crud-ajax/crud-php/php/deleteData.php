<?php
    include ('connection.php');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblmenu WHERE idmenu='$id'";
        mysqli_query($connection, $sql);
        }
    header('location:http://localhost/crud-ajax/crud-php');

?>