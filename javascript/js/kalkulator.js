// Variabel untuk panel angka :
let btn = document.querySelectorAll(".btn-angka > button");
let tampil = document.querySelector("#tampil");
// Variabel untuk pnel operasi mat :
let mat = document.querySelectorAll(".btn-mat > button");
let pilihan = null;
console.log(mat);
// variabel nilai sebeleum operasi
let x;
// variabel nilai sesudah operasi
let y;;


// tampil.value = btn[5].innerHTML;

// console.log(btn[7].innerHTML);

for (let x = 0; x < btn.length; x++) {
    btn[x].onclick = function () {
        // console.log(btn[x].innerHTML);
        // tampil.value = tampil.value + btn[x].innerHTML;
        // Biar lebih singkat :
        
        if (tampil.value == "0") {
            tampil.value = btn[x].innerHTML;
        } else {
            tampil.value += btn[x].innerHTML;
        }
    }
    
}

// Pilihan clear
mat[0].onclick = function () {
    tampil.value = "0";
}

// pilihan tambah
mat[1].onclick = function () {
    pilihan = "tambah";
    x = tampil.value;
    tampil.value = "0";
}

// pilihan kurang
mat[2].onclick = function () {
    pilihan = "kurang";
    x = tampil.value;
    tampil.value = "0";
}

// pilihan kali
mat[3].onclick = function () {
    pilihan = "kali";
    x = tampil.value;
    tampil.value = "0";
}

// pilihan bagi
mat[4].onclick = function () {
    pilihan = "bagi";
    x = tampil.value;
    tampil.value = "0";
}

// pilihan modulus / mod
mat[5].onclick = function () {
    pilihan = "mod";
    x = tampil.value;
    tampil.value = "0";
}

// pilihan hasil / sama dengan
mat[6].onclick = function () {
    y = tampil.value;

    tampil.value = kalkulator(pilihan)
}

function kalkulator(pilihan) {
    if (pilihan != null) {
        switch (pilihan) {
            case "tambah":
                hasil = parseFloat(x) + parseFloat(y);
                break;
            case "kurang":
                hasil = parseFloat(x) - parseFloat(y);
                break;
            case "kali":
                hasil = parseFloat(x) * parseFloat(y);
                break;
            case "bagi":
                hasil = parseFloat(x) / parseFloat(y);
                break;
            case "mod":
                hasil = parseFloat(x) % parseFloat(y);
                break;
            
        }

        return hasil;
    }
}