<?= $this->extend('Views/admin/layout/template'); ?>

<?= $this->section('content'); ?>

<?= service('validation')->listErrors() ?>
<h2>Tambah Data Mekanik</h2>

<div>
<form method="post" action="/admin/mekanik/save">
    <?= csrf_field() ?>
    <div class="my-2">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class ="form-control" name="nama" />
    </div>
    <div class="my-2">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class ="form-control" name="alamat">
    </div>
    <div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>
</div>

<?= $this->endSection(); ?>