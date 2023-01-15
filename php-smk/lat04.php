<?php 

    // OPERATOR MATEMATIKA
    
    $a = 8;
    $b = 5;

    $c = $a + $b;
    echo $c.'<br>';

    $c = $a - $b;
    echo $c.'<br>';

    $c = $a * $b;
    echo $c.'<br>';

    $c = $a / $b;
    echo round($c).'<br>';

    $c = $a % $b;
    echo $c.'<br>';
    
    echo '<br>';

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c.'<br>';

    $c = $a > $b;
    echo $c.'<br>';

    $c = $a == $b;
    echo $c.'<br>';

    $c = $a != $b;
    echo $c.'<br>';

    echo '<br>';

    // INCREMENT

    $a++;
    echo $a.'<br>';

    // DECREMENT

    $a--;
    echo $a.'<br>';
    echo '<br>';

    // OPERATOR STRING ATAU SAMBUNGAN

    $kata = 'Sido';
    $kota = 'Arjo';

    $hasil = $kata.$kota;
    $hasil .= ' Kota udang';
    echo $hasil;



?>