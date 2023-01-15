import {link} from './link.js';

export function edit() {  
    let id = 107;
    let data = {
        pelanggan: 'Update fance axios neww',
        alamat: 'www sedati axios new neww',
        telp: '55555775554'
    };

    link.put('/pelanggan/'+id, data).then(res=>{
        console.log(res);
        let tampil = `<h1 class="alert alert-dark" role="alert">${res.data.pesan}</h1>`;
        document.querySelector("#out").innerHTML=tampil;
    })
}