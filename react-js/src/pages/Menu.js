import { useState } from 'react';
import Tabel from './Tabel';

function Menu() {
    const tittle = "Daftar Menu Restoran";
    const [menus, setMenu]=useState(
        [
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
        ]
    )
    // menampilkan hanya yg buah aja dg memakai filter dan functionnya
    return (
      <div className="App">
        <Tabel menu={menus} tittle={tittle} />
        <Tabel menu={menus.filter((data)=>(data.idkategori===33))} tittle="Menu Buah" /> 
      </div>
    );
  }
  
  export default Menu;
  