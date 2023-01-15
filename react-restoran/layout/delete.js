import {link} from './link.js';

export function hapus() {
    let id = 107;

    link.delete('/pelanggan/'+id).then(res=>{
        console.log(res);
        let tampil = `<h1 class="alert alert-danger" role="alert">${res.data.pesan}</h1>`;
        document.querySelector("#out").innerHTML=tampil;
    });
}