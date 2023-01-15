$(document).ready(function() {
    bacaData();

    
    //button insert data
    $('.btn-tambah').click(function(){
        tambahData();
    });

    //button update data
    $('.btn-ubah').click(function(){
        ubahData();
    });

    //button utk cancel / batal
    $('.btn-batal').click(function(){
        resetForm();
        bacaData();
    });


     //Unuk select data =
     function bacaData() {
        //supaya table tak terduplikasi saat insert data
        $('.targetData').html('');
        $('.btn-tambah').show(); //mennampilkan tombol tambah lagi stlh melakukan program
        $('.btn-ubah').hide(); 
        $('.btn-batal').hide(); 
        $.ajax({
            type: 'GET',
            url: 'php/getData.php',
            dataType: 'JSON',
            success : function (response) {
                //memasukkan data dr database ke dalam tabel / Select Data
                var i;
                var data = '';
                for (i = 0 ; i < response.length ; i++) {
                    data +=
                    
                    `
                    <tr>
                        <td>`+(i+1)+`</td>
                        <td>`+response[i].idkategori+`</td>
                        <td>`+response[i].menu+`</td>
                        <td>`+response[i].gambar+`</td>
                        <td>`+response[i].harga+`</td>
                        <td>
                            <button class='btn-edit' id='`+response[i].idmenu+`'>Edit</button>
                            <button class='btn-delete' id='`+response[i].idmenu+`'>Delete</button>
                        </td>
                    </tr>
                    `
                }
                $('.targetData').append(data);

                //button utk edit
                $('.btn-edit').click(function(){
                    //alert($(this).attr('id'));
                    getSingleData($(this).attr('id'));
                })

                //button utk delete data
                $('.btn-delete').click(function(){
                    //alert($(this).attr('id'));
                    deleteData($(this).attr('id'));
                })
            }
        });
    }


    //function utk update data
    function ubahData() {
        let idmenu = $('.txt-idmenu').val();
        let idkategori = $('.txt-idkategori').val();
        let menu = $('.txt-menu').val();
        let gambar = $('.txt-gambar').val();
        let harga = $('.txt-harga').val();

        $.ajax({
            type: 'POST',
            url: 'php/ubahData.php',
            data: 'idmenu='+idmenu+'&idkategori='+idkategori+'&menu='+menu+'&gambar='+gambar+'&harga='+harga,
            dataType: 'JSON',
            success: function (response){
                if (response.status == '1') {
                    alert(response.msg);
                    bacaData();
                    resetForm();

                } else {
                    alert(response.msg);
                    bacaData();
                    resetForm();
                }
            }
        })
    }

    
    //function insert data
    function tambahData() {
        let idkategori = $('.txt-idkategori').val();
        let menu = $('.txt-menu').val();
        let gambar = $('.txt-gambar').val();
        let harga = $('.txt-harga').val();
        //mengirim value ke addData.php
        $.ajax({
            type: 'POST',
            url: 'php/addData.php',
            data: 'idkategori='+idkategori+'&menu='+menu+'&gambar='+gambar+'&harga='+harga,
            dataType: 'JSON',
            success: function (response) {
                //variabel ini diambil dr file adddata.php
                if (response.status == '1') {
                    alert(response.msg);
                    bacaData();
                    resetForm();

                } else {
                    alert(response.msg);
                    bacaData();
                    resetForm();
                }
            }
        });
    }


    //ini utk mengambil satu data dari database
    function getSingleData(x) {
        $.ajax({
            type: 'POST',
            url: 'php/getSingleData.php',
            data: 'id='+x,
            dataType: 'JSON',
            success: function (response) {
                console.log(response);
                //menampilkan satudata tadi ke dalam form :
                $('.txt-idmenu').val(response.idmenu);
                $('.txt-idkategori').val(response.idkategori);
                $('.txt-menu').val(response.menu);
                $('.txt-gambar').val(response.gambar);
                $('.txt-harga').val(response.harga);

                //menampilkan button edit saat menekan edit, jadi button yg tampil bukan tambah data :
                $('.btn-tambah').hide();
                $('.btn-ubah').show();
                $('.btn-batal').show();
                
            }
        });
    }


    //function untuk delete data
    function deleteData(x) {
        $.ajax({
            type: "POST",
            url: "php/deleteData.php",
            data: "idmenu="+x,
            dataType: "JSON",
            success: function (response) {
                if (response.status == '1') {
                    alert(response.msg);
                    bacaData();

                } else {
                    alert(response.msg);
                    bacaData();
                }
            }
        });
    }


    //function untuk reset form
    function resetForm() {
        $('.txt-idmenu').val('');
        $('.txt-idkategori').val('');
        $('.txt-menu').val('');
        $('.txt-gambar').val('');
        $('.txt-harga').val('');
    }

    

   
});



