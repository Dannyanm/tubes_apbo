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

<h1>Profil Customer</h1>

<div>
    <?php if(session()->getFlashdata('message')) : ?>
            
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('message');?>
            </div>
        
    <?php endif; ?>
</div>

<table class="table-profil">
  <tbody>
    <tr>
      <td>Kode</td>
      <td>:</td>
      <td><?= $kode_customer; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $nama_customer; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?= $alamat_customer; ?></td>
    </tr>
    <tr>
      <td>No. HP</td>
      <td>:</td>
      <td><?= $no_hp; ?></td>
    </tr>
    
  </tbody>
</table>


<a href="/customer/edit/<?= $id_customer; ?>" class="btn btn-warning">Update</a>

</main>

<?= $this->endSection(); ?>