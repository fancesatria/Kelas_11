<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<!-- MEMBUAT ALERT -->
<div class="col-8">
    <?php 
        if(!empty(session()->getFlashdata('info'))){
            echo '<div class="alert alert-danger" role="alert">';
            echo session()->getFlashdata('info');
            echo '</div>';
        }
    ?>
</div>

<div class="col">
    <h1>Update Data</h1>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/kategori/update') ?>" method="post">

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">   
        </div>
        
        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>" required>

        <input class="btn btn-primary" type="submit" name="simpan" value="simpan">

    </form>
</div>

<?= $this->endSection() ?>