<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h2>Tambah Data Mekanik</h2>

<div>
<form method="post" action="/admin/mekanik/save">
    <?= csrf_field(); ?>
    <div class="my-2">
        <label for="kode_mekanik" class="form-label">Kode</label>
        <input type="text" class ="form-control " name="kode_mekanik" value="<?= $kode_mekanik ?>" disabled/>
        
    </div>
    <div class="my-2">
        <label for="nama_mekanik" class="form-label">Nama</label>
        <input type="text" class ="form-control <?= ($validation->hasError('nama_mekanik')) ? 'is-invalid' : ''; ?>" name="nama_mekanik" value="<?= old('nama_mekanik'); ?>"/>
        <div class="invalid-feedback">
            <?= $validation->getError('nama_mekanik'); ?>
        </div>
    </div>
    <div class="my-2">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class ="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" value="<?= old('alamat'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('alamat'); ?>
        </div>
    </div>
    <div class="my-2">
        <label for="no_hp" class="form-label">No. Handphone</label>
        <input type="text" class ="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" name="no_hp" value="<?= old('no_hp'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('no_hp'); ?>
        </div>
    </div>
    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>
</div>

<?= $this->endSection(); ?>