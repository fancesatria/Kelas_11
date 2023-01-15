function kali() {
    let hasil = document.querySelector("#hasil"); //id h1 dipanggil pake selector trs taruh di dalam variabel
    let a = eval(kalku.bil1.value); // kalku ini bisa digunakan utk mendefiniskan bil1, dan memberitau bhw bil1 itu ada di dalam form yang bernama kalku, dan value digunakan utk mengambil value/nilai inputannya
    let b = eval(kalku.bil2.value);
    let c = a * b;
    hasil.innerHTML = c; // variabel c dimasukkan ke dlm variabel hasil yg dihubungkan sama innerhtml
}

//cara lain buat kalku : ini pake id bukan name, ini eventnya ditaruh di js
bagi.onclick = function () {
    let a = parseFloat(document.querySelector("#bil1").value); // ini ngambil value dari id bil1 dari html
    let b = parseFloat(document.querySelector("#bil2").value); // parsefloat berguna untuk mengubah int menjadi float
    let c = parseFloat(a) / parseFloat(b);
    document.querySelector("#hasil").innerHTML = c; // memanggil hasil kedalam html
}

function tambah() {
    let hasil = document.querySelector("#hasil"); 
    let a = eval(kalku.bil1.value);
    let b = eval(kalku.bil2.value);
    let c = a + b;
    hasil.innerHTML = c;
}

function kurang() {
    let hasil = document.querySelector("#hasil"); 
    let a = eval(kalku.bil1.value);
    let b = eval(kalku.bil2.value);
    let c = a - b;
    hasil.innerHTML = c;
}

//function untuk mengosongi data
function hapus() {
    kalku.bil1.value = "";
    kalku.bil2.value = "";
    hasil.innerHTML = "";
}


function halo() {
    alert("Belajar halo javascript");
}

