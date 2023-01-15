<?php 

    // Belajar Function 

    function belajar(){
        echo "Saya belajar PHP";
    }

    function luaspersegi($p = 5, $l = 7){
        $luas = $p*$l;

        echo $luas;
    }

    function luas($p = 5, $l = 7){
        $luas = $p*$l;

        return $luas;
    }

    function output(){
        return "Belajar function";
    }

    echo luas(200,5)*4;

?>