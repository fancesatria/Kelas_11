function coba() {
    a = document.querySelector(".isi").innerHTML = "Belajar Event Listener";
    console.log("coba event listener");
}

// cara pertama
// judul.addEventListener("click", coba);

// cara kedua
// judul. onmouseover = coba;

    // dengan menambahkan function langsung
    judul. onmouseover = function () {
        console.log("coba function anonymous");
    }
