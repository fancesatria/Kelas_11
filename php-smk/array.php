<?php 

    // 1. ARRAY DIMENSI

    // $nama = array("joni","tejo","budi","siti",100,3.5);

    // var_dump($nama);

    // echo '<br>';
    

    // echo '<br>';

    // for ($i=0; $i < 6; $i++) { 
    //     echo $i;
    //     echo $nama[$i] . '<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key . '<br>';
    // }


    // 2. ARRAY ASOSIATIF

    $nama = array(
        "joni" => "surabaya",
        "tejo" => "malang",
        "budi" => "jakarta",
        "siti" => "sidoarjo");

    $nama["joni"] = "surabaya";
    $nama["tejo"] = "malang";
    $nama["budi"] = "jakarta";
    $nama["siti"] = "sidoarjo";

    var_dump($nama);

    echo '<br>';

    echo $nama["joni"];
    echo '<br>';

    foreach ($nama as $key => $value) {
        echo $key . " => " . $value;
        echo '<br>';
    }
    




?>