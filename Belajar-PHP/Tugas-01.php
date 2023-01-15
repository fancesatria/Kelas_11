<?php

    $tgl = 28;
    $bln = 5;

    $hasil = "SALAH";

    //1. ARIES
    if ( ( $tgl >= 21 && $tgl <= 31 && $bln == 3) || ( $tgl >= 1 && $tgl <= 19 && $bln == 4 ) ) {
        $hasil = "ARIES";
    }

    //2. TAURUS
    if ( ( $tgl >= 20 && $tgl <= 30 && $bln == 4) || ( $tgl >= 1 && $tgl <= 20 && $bln == 5 ) ) {
        $hasil = "TAURUS";
    }

    //3. GEMINI
    if ( ( $tgl >= 21 && $tgl <= 31 && $bln == 5) || ( $tgl >= 1 && $tgl <= 20 && $bln == 6 ) ) {
        $hasil = "GEMINI";
    }

    //4. CANCER
    if ( ( $tgl >= 21 && $tgl <= 30 && $bln == 6) || ( $tgl >= 1 && $tgl <= 22 && $bln == 7 ) ) {
        $hasil = "CANCER";
    }

    //5. LEO
    if ( ( $tgl >= 23 && $tgl <= 31 && $bln == 7) || ( $tgl >= 1 && $tgl <= 22 && $bln == 8 ) ) {
        $hasil = "LEO";
    }

    //6. VIRGO
    if ( ( $tgl >= 23 && $tgl <= 30 && $bln == 8) || ( $tgl >= 1 && $tgl <= 22 && $bln == 9 ) ) {
        $hasil = "VIRGO";
    }

    //7. LIBRA
    if ( ( $tgl >= 23 && $tgl <= 31 && $bln == 9) || ( $tgl >= 1 && $tgl <= 22 && $bln == 10 ) ) {
        $hasil = "LIBRA";
    }

    //8. SCORPIUS
    if ( ( $tgl >= 23 && $tgl <= 30 && $bln == 10) || ( $tgl >= 1 && $tgl <= 21 && $bln == 11 ) ) {
        $hasil = "SCORPIUS";
    }

    //9. SAGITARIUS
    if ( ( $tgl >= 22 && $tgl <= 30 && $bln == 11) || ( $tgl >= 1 && $tgl <= 21 && $bln == 12 ) ) {
        $hasil = "SAGITARIUS";
    }

    //10. CAPRICORN
    if ( ( $tgl >= 22 && $tgl <= 31 && $bln == 12) || ( $tgl >= 1 && $tgl <= 19 && $bln == 1 ) ) {
        $hasil = "CAPRICORN";
    }

    //11. AQUARIUS
    if ( ( $tgl >= 20 && $tgl <= 31 && $bln == 1) || ( $tgl >= 1 && $tgl <= 18 && $bln == 2 ) ) {
        $hasil = "AQUARIUS";
    }

    //12. PISCES
    if ( ( $tgl >= 19 && $tgl <= 28 && $bln == 2) || ( $tgl >= 1 && $tgl <= 20 && $bln == 3 ) ) {
        $hasil = "PISCES";
    }

   echo '<h1>'.$hasil.'</h1>'
?>