<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1 class="text-center">Data Transaksi</h1>

<?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
<?php endif; ?>

<h3>Transaksi Berlangsung</h3>
<div>
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Jenis</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Status</th>

        </tr>
      </thead>
      <tbody class="text-center">
        <?php $i = 1; ?>
        <?php foreach ($transaksi as $t) : ?>
        <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $t['kode_transaksi']; ?></td>
            <td><?= $t['nama_customer']; ?></td>
            <td><?= $t['jenis_transaksi']; ?></td>
            <td><?= $t['tanggal_transaksi']; ?></td>
            <td><?= number_to_currency($t['harga_transaksi'], 'IDR'); ?></td>
            <td class="text-center">
                <!-- <button href="/admin/mekanik/<?= $t['id']; ?>" class="btn btn-success">Detail</button> -->
                <!-- <a href="/admin/mekanik/edit/<?= $t['id']; ?>" class="btn btn-warning">Edit</a> -->
                <!-- <form action="/admin/customer/<?= $t['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Selesaikan Order</button>
                </form> -->
                <form action="/admin/transaksi/selesai/<?= $t['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="kode_transaksi" value="<?= $t['kode_transaksi']; ?>">
                    <input type="hidden" name="nama_customer" value="<?= $t['nama_customer']; ?>">
                    <input type="hidden" name="jenis_transaksi" value="<?= $t['jenis_transaksi']; ?>">
                    <input type="hidden" name="tanggal_transaksi" value="<?= $t['tanggal_transaksi']; ?>">
                    <input type="hidden" name="harga_transaksi" value="<?= $t['harga_transaksi']; ?>">

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah transaksi ini sudah selesai?')">Selesaikan Order</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <h3>Transaksi Selesai</h3>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Jenis</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php $i = 1; ?>
            <?php foreach($tselesai as $ts) : ?>
                <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $ts['kode_transaksi']; ?></td>
            <td><?= $ts['nama_customer']; ?></td>
            <td><?= $ts['jenis_transaksi']; ?></td>
            <td><?= $ts['tanggal_transaksi']; ?></td>
            <td><?= 'Rp. ' . $ts['harga_transaksi']; ?></td>
            <td class="text-center">
                <!-- <button href="/admin/mekanik/<?= $t['id']; ?>" class="btn btn-success">Detail</button> -->
                <!-- <a href="/admin/mekanik/edit/<?= $t['id']; ?>" class="btn btn-warning">Edit</a> -->
                <form action="" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="kode_transaksi" value="<?= $ts['kode_transaksi']; ?>">
                    <input type="hidden" name="nama_customer" value="<?= $ts['nama_customer']; ?>">
                    <input type="hidden" name="jenis_transaksi" value="<?= $ts['jenis_transaksi']; ?>">
                    <input type="hidden" name="tanggal_transaksi" value="<?= $ts['tanggal_transaksi']; ?>">
                    <input type="hidden" name="harga_transaksi" value="<?= $ts['harga_transaksi']; ?>">

                    <button class="btn btn-success" disabled>Selesai</button>
                </form>
            </td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</main>

<?= $this->endSection(); ?>