<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<main>

<h1>Detail Mekanik</h1>

<div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title"><?= $mekanik['nama_mekanik']; ?></h5>
    <p class="card-text"><?= $mekanik['alamat']; ?></p>
    <p class="card-text"><?= $mekanik['no_hp']; ?></p>
  </div>
    <a href="/admin/mekanik/edit/<?= $mekanik['id']; ?>" class="btn btn-warning">Edit</a>

    <form action="/admin/mekanik/<?= $mekanik['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
    </form>

</div>
</main>

<?= $this->endSection(); ?>