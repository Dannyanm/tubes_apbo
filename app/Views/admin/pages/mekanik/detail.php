<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Detail Mekanik</h1>

<div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title"><?= $mekanik['nama_mekanik']; ?></h5>
    <p class="card-text"><?= $mekanik['alamat']; ?></p>
    <p class="card-text"><?= $mekanik['no_hp']; ?></p>
  </div>
</div>


<?= $this->endSection(); ?>