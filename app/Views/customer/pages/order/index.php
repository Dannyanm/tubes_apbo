<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1>Order</h1>

<?php

    if(isset($_SESSION)){
        $id_customer = $_SESSION['id_customer'];
        $kode_customer = $_SESSION['kode_customer'];
        $nama_customer = $_SESSION['nama_customer'];
        $alamat_customer = $_SESSION['alamat_customer'];
        $no_hp = $_SESSION['no_hp'];
    };

?>

<div>
    <?php if(session()->getFlashdata('message')) : ?>
            
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('message');?>
            </div>
        
    <?php endif; ?>
</div>
<div class="mb-5">
    <h3>Order Service</h3>
    <form method="post" action="/customer/order/ospareparts">
        <?= csrf_field(); ?>
        <div class="my-2">
            <label for="kode_spareparts" class="form-label">Kode</label>
            <input type="text" class ="form-control " name="kode_spareparts" value="<?= $kode_service; ?>"/>
        </div>
        <div class="my-2">
            <input type="hidden" class ="form-control" name="kategori_spareparts" value="Service"/>
        </div>
        <div class="my-2">
            <input type="hidden" class ="form-control" name="merek_spareparts" value="Service"/>
        </div>
        <div class="my-2">
            <label for="tanggal_transaksi" class="form-label">Tanggal</label>
            <input type="date" class ="form-control" name="tanggal_transaksi">
        </div>
        <div class="my-2">
            <label for="harga_spareparts" class="form-label">Tipe Motor</label>
            <select class="form-select" name="harga_spareparts">
                <option selected>Pilih Tipe Motor</option>
                <option value="100000">
                    Matic IDR 100,000
                    <input type="hidden" value="Matic" name="jenis_spareparts">
                </option>
                
            </select>
        </div>
        <div>
            <input type="submit" value="Submit" class="btn btn-primary"/>
        </div>
    </form>
</div>

<div>
    <h3>Order Spareparts</h3>
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Spareparts</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Merek</th>
            <th scope="col">Jenis Motor</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
                
        <?php $i = 1; ?>
        <?php foreach ($spareparts as $s) : ?>
    
        <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $s['kode_spareparts']; ?></td>
            <td><img src="/img/<?= $s['gambar']; ?>" class="gambar-spareparts" alt="gambar"></td>
            <td><?= $s['kategori_spareparts']; ?></td>
            <td><?= $s['merek_spareparts']; ?></td>
            <td><?= $s['jenis_spareparts']; ?></td>
            <td><?= $s['stok_spareparts']; ?></td>
            <td><?= number_to_currency($s['harga_spareparts'], 'IDR'); ?></td>
            <td>
                <form method="post" action="/customer/order/ospareparts">
                    <?= csrf_field(); ?>
                    <div class="my-2">
                        <input type="hidden" class ="form-control" name="kode_spareparts" value="<?= $s['kode_spareparts']; ?>">
                    </div>
                    <div class="my-2">
                        <input type="hidden" class ="form-control" name="kategori_spareparts" value="<?= $s['kategori_spareparts']; ?>">
                    </div>
                    <div class="my-2">
                        <input type="hidden" class ="form-control" name="harga_spareparts" value="<?= $s['harga_spareparts']; ?>">
                    </div>
                    <div class="my-2">
                        <input type="hidden" class ="form-control" name="jenis_spareparts" value="<?= $s['jenis_spareparts']; ?>">
                    </div>
                    <div class="my-2">
                        <input type="hidden" class ="form-control" name="merek_spareparts" value="<?= $s['merek_spareparts']; ?>">
                    </div>
                    
                    <div>
                        <input type="submit" value="Tambah ke Keranjang" class="btn btn-success"/>
                    </div>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

</main>

<?= $this->endSection(); ?> 