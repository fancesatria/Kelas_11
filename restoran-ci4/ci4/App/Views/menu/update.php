<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<!-- MEMBUAT ALERT -->
<div class="col-8">
    <?php 
        if(!empty(session()->getFlashdata('info'))){
            echo '<div class="alert alert-danger" role="alert">';
            $error = session()->getFlashdata('info');
            foreach ($error as $key => $value) {
                echo $key. " -> " .$value;
                echo "<br>";
            }
            
            echo '</div>';
        }
    ?>
</div>


<div class="col">
    <h3>Update Data</h3>
</div>


<div class="col-8">
<form action="<?= base_url('/admin/menu/update') ?>" method="post" enctype="multipart/form-data">

    <label for="harga" class="form-label">Kategori</label>
    <select class="form-select my-2" name="idkategori" id="idkategori">
        <?php foreach ($kategori as $key => $value): ?>
            <option <?php if ($value['idkategori'] == $menu['idkategori']) echo "selected" ?> value="<?= $value['idkategori'] ?>"> <?= $value['kategori'] ?> </option>
        <?php endforeach ?>
    </select>

    <div class="mb-3">
        <label for="menu" class="form-label">Menu</label>
        <input type="text" name="menu" value="<?= $menu['menu'] ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" value="<?= $menu['harga'] ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control" >
    </div>
    <input type="hidden" name="gambar" value="<?= $menu['gambar'] ?>" class="form-control" required>
    <input type="hidden" name="idmenu" value="<?= $menu['idmenu'] ?>" class="form-control" required>

    <input class="btn btn-success" type="submit" name="simpan" value="simpan">
    
</form>
</div>

<?= $this->endSection() ?>