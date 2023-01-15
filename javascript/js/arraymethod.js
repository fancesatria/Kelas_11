// Array bisa berisi string, number, object, function, atau campuran.

// array berisi object
let nilai = [
    {nama : "budi", ipa : 90, bahasa : 65, matematika :  85},
    {nama : "fance", ipa :  93, bahasa : 95, matematika :  85},
    {nama : "satria", ipa :  90, bahasa : 70, matematika :  80},
    {nama : "nusa", ipa :  93, bahasa : 90, matematika :  78},
];

// memanggil property object dalam array 
    // console.log(nilai[1].nama);


// Array berisi string
let nama = ["budi", "fance", "satria", "nusa"];

    // PUSH = menambah array
    // nama.push("hinata", "aqua");

    // POP = mengambil item array yang paling belakang
    // console.log(nama.pop());

    // SHIFT = mengambil item array yang paling depan
    // console.log(nama.shift());

    // UNSHIFT = menambahkan item di posisi paling awal
    // nama.unshift("satella", "albedo");

    // SPLICE = menghapus array, maksudnya yaitu menghapus mulai dr index 6 sampai 2 index berikutnya
    // nama.splice(6, 2);
        // menampilkan hasil pengambilan array
        // console.log(nama.splice(6, 2));

    // SLICE = mengambil item array tanpa menghapus
    // console.log(nama.slice(0, 2));

    // console.log(nama);

let mapel = ["ips", "ipa", "matematika"];

    // CONCAT = menggabungkan 2 array menjadi 1 dengan concat
        // cara 1 --> console.log(nama.concat(mapel));
        // cara 2 --> console.log(nama.concat(["ips", "sejarah", "or"]));


    // for (let b = 0; b < nama.length; b++) {
    //     console.log(nama[b]);
    // }

    // ForEach = menggunakan foreach ada 2 cara :
        // nama.forEach(function (a) {
        //     console.log(a);
        // })

        // nama.forEach(a => console.log(a));

    // FILTER =menggunakan filter, untuk menampilkan data tertentu, juga ada 2 cara : anonymous function dan arrow function
        // nilai.filter (function (a) {
        //     if (a.bahasa > 80) {
        //         console.log(a.nama);
        //     }
        // })

        // nilai.filter(a => a.bahasa > 80 && a.matematika > 80 ? console.log(a.nama) : null);



    // MAP = mengambil dan menghasilkan array        
        // // let siswa = nilai.map(function (a) {
        // //     return a.nama;
        // // });

        // let siswa = nilai.map(a => [a.ipa, a.bahasa, a.matematika]);

        // console.log(siswa);


    // SORT = mengembalikan array dalam bentuk pengurutan
        // mapel.sort();   
        
        // console.log(mapel);


    // REDUCE = 
        // let hasil = nilai.reduce(function (a, b) {
        //     return (a = a + b.ipa);
        // }, 0);

        // let hasil = nilai.reduce((a, b) => (a += b.matematika), 0);

        // console.log(hasil);



    
    

