<?php 

    // MATERI LOOPING ATAU PENGULANGAN


    // PENGULANGAN FOR NAIK
    for ($i = 1; $i <= 10 ; $i++) { 
            echo $i . ', ';
    }
    echo '<br>';


    // PENGULANGAN FOR MENURUN
    for ($i = 10; $i >= 1 ; $i--) { 
        echo $i . ', ';
    }
    echo '<br>';


    // PENGULANGAN WHILE
    $a = 1;
    while ($a <= 10) {
        echo $a . ', ';

        $a++;
    }
    echo '<br>';

    
    // PENGULANGAN  DO WHILE
    $a = 1;
    do {
        echo $a . ', ';
        $a++;
    } while ($a <= 50);




?>