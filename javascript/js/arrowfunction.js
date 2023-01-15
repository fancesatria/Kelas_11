let fungsi = function(nama) {
    console.log("Belajar function " + nama);

}

fungsi("fance");


let contoh = (nama) => {
    console.log("belajar function " + nama)
}

contoh("budi");

// model biasa
let tambah = function (a, b) {
    return a + b;
}

console.log(tambah(2, 5));


// model arrow
let plus = (a, b) => a + b;
console.log(plus(2, 5));

    // kalau parameter hanya 1, boleh tak pakai tanda kurung
    let hasil = a => a * 3;
    console.log(hasil(4));

    // tanpa parameter
    let lagi = () => console.log("coba lagi");
    lagi();

    // jika jumlah baris ada banyak
    let sinau = () => {
        console.log("baris pertama");
        console.log("baris kedua");
        console.log("baris ketiga");
        console.log("baris elanjutnya");
    };

    sinau();

    // dengan pengujian
    let nilai = 5;

    let uji = nilai < 10 ? () => predikat = "gagal" : () => predikat = "lulus";
    console.log(uji());
    







