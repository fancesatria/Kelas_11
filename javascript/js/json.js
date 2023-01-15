document.querySelector("#click").addEventListener("click",tampil);

function tampil(params) {
    let url = "js/tblmenu.json";
    fetch(url)
        .then(function (res) {
            return res.json();
        })
        .then(function (data) {
            let output = "<h1>Data Menu</h1> <table border=1px> <th>Menu</th> <th>Harga</th> <th>Warna</th>";
            data.forEach(element => {
                output += `<tr>
                    <td>${element.menu}</td>
                    <td>${element.harga}</td>
                    <td>${element.warna[0]}</td>
                </tr>`;
            });
            output += "</table>";
            document.querySelector("#isi").innerHTML=output;
        })

    
}



// let tblmenu = [
//     {
//         "idmenu" : 16,
//         "idkategori" : 33,
//         "menu" : "Jeruk Mandarin",
//         "harga" : 4000,
//         "warna" : ["merah", "biru", "hijau"],
//         "stok" : true,
//         "keterangan" : null
//     },

//     {
//         "idmenu" : 15,
//         "idkategori" : 33,
//         "menu" : "Melon Konoha",
//         "harga" : 4000,
//         "warna" : ["merah", "hijau"],
//         "stok" : false,
//         "keterangan" : null
//     }
// ]

// console.log(tblmenu);