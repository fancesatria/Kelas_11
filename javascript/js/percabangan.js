if (false) {
    console.log("dijalankan jika benar");
} else {
    console.log("dijalankan jika salah");
}

let nilai = 65;
let standar = 60;
let baik = "Lulus";
let gagal = "Tidak lulus";
let max = 100;
let min = 0;
let peringatan = "Nilai tidak valid";

if (nilai <= max && nilai >= min) {
    if (nilai >= standar) {
    console.log(baik);
    } else {
        console.log(gagal);
    }
} else {
    console.log(peringatan);
}

