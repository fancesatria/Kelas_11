<form action="" method="post" enctype="multipart/form-data">

    pilih file gambar :
    <input type="file" name="upload">
    <input type="submit" name="kirim" value="simpan">
</form>


<?php 

    if (isset($_POST['kirim'])) {
        
        $file = $_FILES['upload'];
        
        // var_dump($_FILES['upload']);

        // menampilkan seluruh isi dalam variabel file : 
        foreach ($file as $key => $value) {
            echo $key . ' = ' . $value;
            echo '<br>';
        }

        // yang dibutuhkan utk buat upload file mulai dari sini 
        $name = $_FILES['upload']['name'];
        $temp = $_FILES['upload']['tmp_name'];
        
        echo $name . ' = ' . $temp;

        // Untuk mengupload gambar dapat menggunakan function :
        move_uploaded_file($temp,'gambar/' . $name);
    }


?>