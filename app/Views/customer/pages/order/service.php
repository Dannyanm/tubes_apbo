<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
<h2>Booking Service</h2>

    <?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
    <?php endif; ?>

<div>
<form method="post" action="/customer/order/save">
    <?= csrf_field(); ?>
    <div class="my-2">
        <label for="kode_transaksi" class="form-label">Kode</label>
        <input type="text" class ="form-control " name="kode_transaksi" value="<?= $kode_transaksi ?>" disabled/>
    </div>
    <div class="my-2">
        <label for="jenis_transaksi" class="form-label">Jenis</label>
        <select class="form-select" name="jenis_transaksi">
            <option selected>Service</option>
        </select>
    </div>
    <div class="my-2">
        <label for="nama_customer" class="form-label">Nama</label>
        <input type="text" class ="form-control" name="nama_customer"/>
    </div>
    <div class="my-2">
        <label for="tanggal_transaksi" class="form-label">Tanggal</label>
        <input type="date" class ="form-control" name="tanggal_transaksi">
    </div>
    <div class="my-2">
        <label for="harga_transaksi" class="form-label">Tipe Motor</label>
        <select class="form-select" name="harga_transaksi">
            <option selected>Pilih Tipe Motor</option>
            <option value="100000">Matic</option>
            <option value="80000">Manual</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>
</div>
</main>

<?= $this->endSection(); ?>