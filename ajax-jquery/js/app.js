$( document ).ready(function() {

    // variabel
    let id = "";
    let pelanggan = "";
    let alamat = "";
    let telp = "";


    // button submit
    $("#submit").click(function (e) { 
        e.preventDefault();
        id = $("#id").val();;
        pelanggan = $("#pelanggan").val(); // mengisi variabel dengan getVal
        alamat = $("#alamat").val(); 
        telp = $("#telp").val(); 

        if (id == "") {
            insertData();
        } else {
            updateData();
        }

        // mengososngi variabel setelah disubmit
        $("#id").val("");
        $("#pelanggan").val("");
        $("#alamat").val("");
        $("#telp").val("");

        //console.log("pelanggan");

    });


    // button tambah data
    $("#btn-tambah").click(function (e) { 
        e.preventDefault();
        
        $("#tittle").html("<p>Tambah Data</p>");

        // mengososngi variabel setelah disubmit
        $("#id").val("");
        $("#pelanggan").val("");
        $("#alamat").val(""
        $("#telp").val("");

        //console.log("pelanggan");

    });



    // Untuk membuat button delete
    $("tbody").on("click", "#btn-del", function () {
        let id = $(this).attr("data-id"); // <- utk menampung id, this itu utk panggil dirinyasendiri
        // pertanyaan konfirmasi sblm hapus data
        if (confirm("Yakin akan hapus data ini ?")) { //confirm mrupakan function dr JS
            deleteData(id);
        }

        
    });

    // Untuk membuat button update
    $("tbody").on("click", "#btn-update", function () {
        let id = $(this).attr("data-id"); // <- utk menampung id, this itu utk panggil dirinyasendiri
        $("#tittle").html("<p>Update Data</p>");
        selectUpdate(id);
    });

    // function select update
    function selectUpdate(id) {
        let idpelanggan = {
            idpelanggan : id
        }

        $.ajax({
            type: "post",
            url: "php/selectupdate.php",
            cache: false,
            data: JSON.stringify(idpelanggan),
            // dataType: "dataType",
            success: function (response) {
                let data = JSON.parse(response); //mengubah json ke objek

                //memasukkan data kedalam form
                $("#id").val(data.idpelanggan);
                $("#pelanggan").val(data.pelanggan);
                $("#alamat").val(data.alamat);
                $("#telp").val(data.telp);

            }
        });
    }

    
    // select data
    function selectData() {
        $.ajax({
            type: "get",
            url: "php/select.php",
            cache: false,
            dataType:"json",
            success: function (response) {
                let out = "";
                let No = 1;
                $.each(response, function (_key, val){
                    // console.log(val.pelanggan);
                        out += `<tr>
                            <td>${No++}</td>
                            <td>${val.pelanggan}</td>
                            <td>${val.alamat}</td>
                            <td>${val.telp}</td>
                            <td><button type="button" class="btn btn-danger" id="btn-del" data-id=${val.idpelanggan} >Delete</button></td> //val.idpel itu utk ambil id
                            <td><button type="button" class="btn btn-success" id="btn-update" data-id=${val.idpelanggan} data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button></td> //val.idpel itu utk ambil id
                        </tr>`;
                });
                $("#isidata").html(out);
            }
        });
    }

    // insert data
    function insertData() {
        let dataPelanggan = {
            pelanggan : pelanggan,
            alamat : alamat,
            telp : telp
        };

        $.ajax({
            type: "post",
            url: "php/insert.php",
            cache: false,
            data: JSON.stringify(dataPelanggan),
            //dataType: "dataType",
            success: function (response) {
                // response berguna untuk membaca file kiriman dr PHP
                let out = `<p>${response}</p>`
                alert(response);
                
            }
        });

        selectData();
    }

    // delete data
    function deleteData(id) {
        let idpelanggan = {
            idpelanggan : id
        }

        $.ajax({
            type: "post",
            url: "php/delete.php",
            cache: false,
            data: JSON.stringify(idpelanggan),
            // dataType: "dataType",
            success: function (response) {
                alert(response);
            }
        });

        selectData();
    }

    // update data
    function updateData() {
        let dataPelanggan = {
            idpelanggan : id,
            pelanggan : pelanggan,
            alamat : alamat,
            telp : telp
        };

        $.ajax({
            type: "post",
            url: "php/update.php",
            cache: false,
            data: JSON.stringify(dataPelanggan),
            //dataType: "dataType",
            success: function (response) {
                // response berguna untuk membaca file kiriman dr PHP
                let out = `<p>${response}</p>`
                alert(response);
                
            }
        });

        selectData();
    }

    selectData();
});