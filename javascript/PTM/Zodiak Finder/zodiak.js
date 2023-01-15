zodiak.onclick = function () {
    bln = document.querySelector("#bulan").value;
    tgl = document.querySelector("#tanggal").value;

    if ((tgl >= 21 && tgl <= 31 && bln ==3) || (tgl >= 1 && tgl <= 4 && bln == 4)){
        document.querySelector("#hasil").innerHTML = "Aries";

    } else if ((tgl >= 20 && tgl <= 30 && bln == 4) || (tgl >= 1 && tgl <= 20 && bln == 5)) {
        document.querySelector("#hasil").innerHTML = "Taurus";

    } else if ((tgl >= 20 && tgl <= 31 && bln == 5) || (tgl >= 1 && tgl <= 20 && bln == 6)) {
        document.querySelector("#hasil").innerHTML = "Gemini"; 

    } else if ((tgl >= 21 && tgl <= 30 && bln == 6) || (tgl >= 1 && tgl <= 22 && bln == 7)) {
        document.querySelector("#hasil").innerHTML = "Cancer";

    } else if ((tgl >= 23 && tgl <= 31 && bln == 7) || (tgl >= 1 && tgl <= 22 && bln == 8)) {
        document.querySelector("#hasil").innerHTML = "Leo";
        
    } else if ((tgl >= 23 && tgl <= 31 && bln == 8) || (tgl >= 1 && tgl <= 22 && bln == 9)) {
        document.querySelector("#hasil").innerHTML = "Virgo";
        
    } else if ((tgl >= 23 && tgl <= 31 && bln == 9) || (tgl >= 1 && tgl <= 22 && bln == 10)) {
        document.querySelector("#hasil").innerHTML = "Libra";
        
    } else if ((tgl >= 23 && tgl <= 30 && bln == 10) || (tgl >= 1 && tgl <= 21 && bln == 11)) {
        document.querySelector("#hasil").innerHTML = "Scorpius";
        
    } else if ((tgl >= 22 && tgl <= 30 && bln == 11) || (tgl >= 1 && tgl <= 21 && bln == 12)) {
        document.querySelector("#hasil").innerHTML = "Sagitarius";
        
    } else if ((tgl >= 22 && tgl <= 31 && bln == 12) || (tgl >= 1 && tgl <= 19 && bln == 1)) {
        document.querySelector("#hasil").innerHTML = "Capricorn";
        
    } else if ((tgl >= 20 && tgl <= 31 && bln == 1) || (tgl >= 1 && tgl <= 18 && bln == 2)) {
        document.querySelector("#hasil").innerHTML = "Aquarius";
        
    } else if ((tgl >= 19 && tgl <= 28 && bln == 2) || (tgl >= 1 && tgl <= 20 && bln == 3)) {
        document.querySelector("#hasil").innerHTML = "Pisces";
        
    } else {
        document.querySelector("#hasil").innerHTML = "Tanggal atau BUlan tidak valid";
    }
    

    
}