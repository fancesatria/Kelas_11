<?php 

    session_start();

    echo $_SESSION['user'];

    echo '<br>';

    echo $_SESSION['nama'];

    echo '<br>';

    echo $_SESSION['alamat'];

    echo '<br>';

  foreach ($_SESSION as $key => $value) {
        echo $value . ' => ' . $value . '<br>';
    }  

?>