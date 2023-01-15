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
    <h3><?= $judul ?></h3>
</div>


<div class="col-8">
    <form action="<?= base_url('/admin/user/ubah') ?>" method="post">

        <div class="mb-3">
            <input type="hidden" value="<?= $user['iduser'] ?>" name="iduser" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="<?= $user['email'] ?>" name="email" class="form-control" required>
        </div>

        <label for="level" class="form-label">Level</label>
        <select class="form-select my-2" name="level" id="idkategori">
            <?php foreach ($level as $key): ?>
                <option <?php if ( $user['level'] == $key){ 
                    echo "selected"; } 
                    ?> value="<?= $key ?>"> <?= $key ?> </option>
            <?php endforeach ?>
        </select>

        <input class="btn btn-success" type="submit" name="simpan" value="simpan">
        
    </form>
</div>

<?= $this->endSection() ?>