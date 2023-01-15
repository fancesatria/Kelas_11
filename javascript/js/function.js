// Function biasa
function coba() {
    let belajar = "Saya belajar Javascript";
    console.log(belajar);
    console.log("Javascript itu mudah...");
}
    // Menggabungkan loop dengan function
    for (let x = 0; x < 5; x++) {
        console.log(x) + coba();
        
    }



// Function berparameter
function persegi(l, p) {

    luas = p * l;
    console.log(luas);

}

function out() {
    return console.log("output function");
}

function lingkaran(r) {
    luas = 3.14 * r * r;
    return luas;
}

const tinggi = 3;
let tabung = lingkaran(7) * tinggi;

function lewat(a) {
    return a;
}


// console.log(tabung);

console.log(lewat(7));
