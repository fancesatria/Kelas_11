<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col">
        <h1> <?= $judul ?> </h1>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <p>Pelanggan : <?= $order[0]['pelanggan'] ?></P>
    </div>

    <div class="col">
        <p>Tanggal : <?= date("d-m-Y",strtotime($order[0]['tglorder'] )) ?></P>
    </div>

    <div class="col">
        <p>Total : <strong> <?= number_format($order[0]['total']) ?> </strong></P>
    </div>
</div>


<div class="row mt-2">
    <div class="col">
        <h2>Rincian Order</h2>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>

            <?php $no = 1 ?>
            <?php foreach ($detail as $value): ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['menu'] ?></td>
                <td><?= $value['hargajual'] ?></td>
                <td><?= $value['jumlah'] ?></td>
                <td><?= $value['jumlah'] * $value['hargajual'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-8">
        <?php 
            if(!empty(session()->getFlashdata('info'))){
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
                echo '</div>';
            }
        ?>
    </div>
</div>


<div class="row mt-2">
    <div class="col-8">
        <form action="<?= base_url('/admin/order/update') ?>" method="post">

        <div class="mb-3">
            <label for="kategori" class="form-label">Bayar</label>
            <input type="number" name="bayar" class="form-control" required>
        

            <input type="hidden" name="total" value="<?= $order[0]['total'] ?>" class="form-control" required>
            <input type="hidden" name="idorder" value="<?= $order[0]['idorder'] ?>" class="form-control" required>
        
            <input class="btn btn-success mt-2" type="submit" name="simpan" value="simpan">
        </div>

        </form>
    </div>
</div>


<?= $this->endSection() ?>