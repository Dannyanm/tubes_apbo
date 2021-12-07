<?= $this->extend('Views/admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1>Data Spareparts</h1>

<!-- <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Pelumas</b></h5>
    <p class="card-text">Daftar harga pelumas dengan harga terbaik!</p>
    <a href="<?= base_url('/admin/spareparts/detail');?>" class="button-toggler button-toggler-primary">Cek disini!</a>
  </div>
</div> -->

<?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
<?php endif; ?>

<div class="mb-2">
    <a href="<?= base_url('admin/spareparts/create');?>" class="btn btn-primary">Tambah Spareparts</a>
</div>


<table class="table table-bordered">
  <thead class="text-center">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Spareparts</th>
        <th scope="col">Nama</th>
        <th scope="col">Merek</th>
        <th scope="col">Jenis Motor</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php $i = 1; ?>
    <?php foreach ($spareparts as $s) : ?>
    <tr>
        <th class="text-center" scope="row"><?= $i++; ?></th>
        <td><?= $s['kode_spareparts'] ?></td>
        <td><?= $s['nama_spareparts'] ?></td>
        <td><?= $s['merek_spareparts'] ?></td>
        <td><?= $s['jenis_spareparts'] ?></td>
        <td><?= $s['stok_spareparts'] ?></td>
        <td><?= 'Rp. ' . $s['harga_spareparts'] ?></td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>

</main>
<?= $this->endSection(); ?>