<?= $this->extend('Views/customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1>Order</h1>

<div>
    <?php if(session()->getFlashdata('message')) : ?>
            
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('message');?>
            </div>
        
    <?php endif; ?>
</div>
<div class="mb-5">
    <h3>Order Service</h3>
    <form method="post" action="/customer/order/save">
        <?= csrf_field(); ?>
        <div class="my-2">
            <label for="kode_service" class="form-label">Kode Service</label>
            <input type="text" class ="form-control " name="kode_service" value="<?= $kode_service; ?>" disabled/>
        </div>
        <div class="my-2">
            <label for="jenis_transaksi" class="form-label">Jenis</label>
            <select class="form-select" name="jenis_transaksi" value="Service">
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
                <form method="post" action="/customer/order/addKeranjang">
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