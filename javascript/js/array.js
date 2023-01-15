// function anonymous / tanpa nama
let coba = function () {
    return "coba function";
}

let buah = ['pisang', 'anggur', 'jeruk', 77, coba(),
    (tes = () => "hasil return arrow function"), // memasukkan function ke dalam array
    function nama() {
        return "Helo world"
    }

];

console.log(buah);

// memangguil salah satu isi array
console.log(buah[1]);

// memanggil semua array dengan looping
for(let i in buah){
    console.log(buah[i]);
}

// memanggil function di dalam array
console.log(buah[5]());

console.log(buah[6]());