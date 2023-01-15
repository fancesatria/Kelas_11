<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="col">
    <h3>Insert Data</h3>
</div>


<div class="col-8">
    <form action="<?= base_url('/admin/kategori/insert') ?>" method="post">

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" required>
        </div>

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

        <input class="btn btn-success" type="submit" name="simpan" value="simpan">
        
    </form>
</div>

<?= $this->endSection() ?>