<?= $this->extend('Views/admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1>This is Sparepart Page folder sendiri</h1>

<div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title"><b>Pelumas</b></h5>
    <p class="card-text">Daftar harga pelumas dengan harga terbaik!</p>
    <a href="<?= base_url('/admin/spareparts/detail');?>" class="btn btn-primary">Cek disini!</a>
  </div>
</div>

<?= $this->endSection(); ?>