<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<main>
<h2>Edit Data Spareparts</h2>

<div>
<form method="post" action="/admin/spareparts/update/<?= $spareparts['id']; ?>">
    <?= csrf_field(); ?>
    <div class="my-2">
        <label for="stok_spareparts" class="form-label">Stok Spareparts</label>
        <input type="text" class ="form-control" name="stok_spareparts" value="<?= $spareparts['stok_spareparts'] ?>" required/>
        
    </div>
    <div class="my-2">
        <label for="harga_spareparts" class="form-label">Harga Spareparts</label>
        <input type="text" class ="form-control" name="harga_spareparts" value="<?= $spareparts['harga_spareparts'] ?>" required/>
        
    </div>

    <div>
        <!-- <input type="submit" value="Submit" class="btn btn-primary"/> -->
        <button type="submit" class="btn btn-warning">Update Data</button>
    </div>
</form>
</div>
</main>

<?= $this->endSection(); ?>