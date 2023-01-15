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
    <h3>Insert Data User</h3>
</div>


<div class="col-8">
    <form action="<?= base_url('/admin/user/insert') ?>" method="post">

        <div class="mb-3">
            <label for="kategori" class="form-label">User</label>
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <label for="harga" class="form-label">Level</label>
        <select class="form-select my-2" name="level" id="idkategori">
            <?php foreach ($level as $key): ?>
                <option value="<?= $key ?>"> <?= $key ?> </option>
            <?php endforeach ?>
        </select>

        <input class="btn btn-success" type="submit" name="simpan" value="simpan">
        
    </form>
</div>

<?= $this->endSection() ?>