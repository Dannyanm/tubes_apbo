<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
<h1>Daftar Harga Spareparts</h1>

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