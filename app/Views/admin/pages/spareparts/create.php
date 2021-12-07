<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h2>Tambah Spareparts</h2>

<div>
<form method="post" action="/admin/spareparts/save">
    <?= csrf_field(); ?>
    <div class="my-2">
        <label for="kode_spareparts" class="form-label">Kode</label>
        <input type="text" class ="form-control " name="kode_spareparts" value="<?= $kode_spareparts ?>" disabled/>
        
    </div>
    <div class="my-2">
        <label for="nama_spareparts" class="form-label">Nama</label>
        <input type="text" class ="form-control" name="nama_spareparts" />
    </div>
    <div class="my-2">
        <label for="merek_spareparts" class="form-label">Merek</label>
        <input type="text" class ="form-control" name="merek_spareparts" />
    </div>
    <div class="my-2">
        <label for="jenis_spareparts" class="form-label">Jenis Motor</label>
        <select class="form-select" name="jenis_spareparts">
            <option value="Matic">Matic</option>
            <option value="Manual">Manual</option>
        </select>
    </div>
    <div class="my-2">
        <label for="stok_spareparts" class="form-label">Stok</label>
        <input type="text" class ="form-control" name="stok_spareparts" />
    </div>
    <div class="my-2">
        <label for="harga_spareparts" class="form-label">Harga</label>
        <input type="text" class ="form-control" name="harga_spareparts" />
    </div>
    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>
</div>

</main>

<?= $this->endSection(); ?>