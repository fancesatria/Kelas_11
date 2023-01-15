import {link} from './link.js';

export function post() {
    let data = {
        pelanggan:'fance axios',
        alamat: 'sedati axios',
        telp: '09999999999'
    }

    link.post('/pelanggan', data).then(res=>{
        console.log(res);
        let tampil = `<h1 class="alert alert-success" role="alert">${res.data.pesan}</h1>`;
        document.querySelector("#out").innerHTML=tampil;
        });
}