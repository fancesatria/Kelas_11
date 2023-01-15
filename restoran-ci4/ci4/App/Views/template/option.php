
<select class="form-select my-2" onchange="this.form.submit()" name="idkategori" id="idkategori">
    <option value="1">Cari...</option>
    <?php foreach ($kategori as $key => $value): ?>
        <option value="<?= $value['idkategori'] ?>"> <?= $value['kategori'] ?> </option>
    <?php endforeach ?>
</select>
