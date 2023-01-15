<?php 

// $nama = array("joni","tejo","budi","siti",100);

// var_dump($nama);

// echo '<br>';

// foreach ($nama as $key => $value) {
//     echo $key . '<br>';
// }

$nama = array(
    "joni" => "surabaya",
    "tejo" => "malang",
    "budi" => "jakarta",
    "siti" => "sidoarjo");

var_dump($nama);
echo '<br>'; 
foreach ($nama as $key => $value) {
echo $key . '-' . $value . '<br>';
}



?>