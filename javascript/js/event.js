// belajar dom event
function tampil(b) {
    a = document.querySelector("p").innerText = "Belajar event js di tag p " + b;
    // a.innerText = "Belajar event js di tag p";
    console.log("belajar event js");
}

judul.onclick = function () {
    document.querySelector(".isi").innerHTML = "belajar event js menggunakan id";
}