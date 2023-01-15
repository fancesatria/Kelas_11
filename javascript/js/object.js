// object itu adalah tipe data yang bisa diisi berbagai hal

const objek = {
    // menulis variabel tanpa let
    nama : "helo world",
    telp : 12345,

    //array
    buah : ['kelapa', 'pir', 'pepaya'],

    // function
    coba : function () {
        return "coba function dalam object"
    },

    boleh : true,
    "santai saja" : 1234,
};

// memanggil satu data array, yaitu dengan titik
    console.log(objek.nama);
    console.log(objek.boleh);
    console.log(objek["santai saja"]);

    // memanggil function dala objek
    console.log(objek.coba());

    // memanggil array dalam objek
    console.log(objek.buah[1]);