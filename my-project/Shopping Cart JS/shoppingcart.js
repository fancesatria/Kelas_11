let tblmenu = [
    {
    idmenu : 16, 
    idkategori : 33, 
    menu : "Jeruk Mandarin", 
    gambar : "jeruk.jpg", 
    harga : 4000
    },

    {
    idmenu : 15, 
    idkategori : 33, 
    menu : "Melon konoha", 
    gambar : "melon.jpg", 
    harga : 4000
    },

    {
    idmenu : 29, 
    idkategori : 31, 
    menu : "Jus Mangga", 
    gambar : "jusmangga.jpg", 
    harga : 8000
    },

    {
    idmenu : 14, 
    idkategori : 33, 
    menu : "Mangga asgard", 
    gambar : "mangga.jpg", 
    harga : 4000
    },

    {
    idmenu : 13, 
    idkategori : 33, 
    menu : "Anggur hijau", 
    gambar : "anggur.jpg", 
    harga : 4000
    },

    {
    idmenu : 20, 
    idkategori : 31, 
    menu : "Es Jeruk", 
    gambar : "esjeruk.jpg", 
    harga : 8000
    },
];

let tampil = tblmenu.map(function (kolom) {
    return `<div class="produk-content">
                <div class="image">
                    <img src="images/${kolom.gambar}">
                </div>

                <div class="titel">
                    <h2>${kolom.menu}</h2>
                </div>

                <div class="harga">
                    <h2>Rp. ${kolom.harga}</h2>
                    <div class="btn-beli">
                        <button data-idmenu=${kolom.idmenu}>Buy Now!</button>
                    </div>
                </div>

                
            </div>`;
});

let isi = document.querySelector(".produk");
isi.innerHTML = tampil;


console.log(tampil);

let btnbeli = document.querySelectorAll(".btn-beli > button");

let cart = [];

for (let index = 0; index < btnbeli.length; index++) {
    btnbeli[index].onclick = function () {
        // console.log(btnbeli[index].dataset["idmenu"]);
        // cart.push(btnbeli[index].dataset["idmenu"]);

        tblmenu.filter(function (a) {
            if (a.idmenu == btnbeli[index].dataset["idmenu"]) {
                cart.push(a);
                console.log(cart);
            }
        })
    };
};

// console.log(cart);
