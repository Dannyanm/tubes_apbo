<?= $this->extend('Views/admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1>Daftar Harga Pelumas</h1>

<table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Merk</th>
        <th scope="col">Jenis Motor</th>
        <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>Castrol</td>
        <td>Manual</td>
        <td>Rp. 50.000,-</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Shell Helix</td>
        <td>Matic (tapi bukan PCX)</td>
        <td>Rp. 2.500.000,-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Minyak Jalantah</td>
        <td>Khusus PCX</td>
        <td>Rp. 2.000,-</td>
    </tr>
  </tbody>
</table>

</main>

<?= $this->endSection(); ?>