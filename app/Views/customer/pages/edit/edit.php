<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<?php

    if(isset($_SESSION)){
        $id_customer = $_SESSION['id_customer'];
        $kode_customer = $_SESSION['kode_customer'];
        $nama_customer = $_SESSION['nama_customer'];
        $alamat_customer = $_SESSION['alamat_customer'];
        $no_hp = $_SESSION['no_hp'];
    };

?>

<main>
<h2>Edit Profil</h2>

<div>
<!-- <form method="post" action="/customer/customer/update/> -->
<form method="post" action="/customer/customer/update/<?= $customer['id_customer']; ?>">
    <?= csrf_field(); ?>
    <!-- <input type="hidden" name="slug" value=""> -->
    <div class="my-2">
        <label for="nama_customer" class="form-label">Nama</label>
        <input type="text" class ="form-control" name="nama_customer" value="<?= $customer['nama_customer']; ?>"  required/>
    </div>
    <div class="my-2">
        <label for="alamat_customer" class="form-label">Alamat</label>
        <input type="text" class ="form-control" name="alamat_customer" value="<?= $customer['alamat_customer']; ?>" required/>
    </div>
    <div class="my-2">
        <label for="no_hp" class="form-label">No. Handphone</label>
        <input type="text" class ="form-control" name="no_hp" value="<?= $customer['no_hp']; ?>" required/>
    </div>
    <div>
        <!-- <input type="submit" value="Submit" class="btn btn-primary"/> -->
        <button type="submit" class="btn btn-warning">Update Data</button>
    </div>
</form>
</div>
</main>

<?= $this->endSection(); ?>