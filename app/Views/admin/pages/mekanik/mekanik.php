<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Mekanik</h1>
<table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Handphone</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($mekanik as $m) : ?>
    <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $m['nama_mekanik']; ?></td>
        <td><?= $m['alamat']; ?></td>
        <td><?= $m['no_hp']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection(); ?>