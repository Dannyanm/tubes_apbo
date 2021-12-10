<?= $this->extend('Views/admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h1>Data Spareparts</h1>

<div class="mb-2">
    <a href="<?= base_url('admin/spareparts/create');?>" class="btn btn-primary">Tambah Spareparts</a>
</div>
<div>
    <?php if(session()->getFlashdata('message')) : ?>
            
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('message');?>
            </div>
        
    <?php endif; ?>
</div>


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
        <td><?= $s['kode_spareparts'] ?></td>
        <td><img src="/img/<?= $s['gambar'] ?>" class="gambar-spareparts" alt="gambar"></td>
        <td><?= $s['kategori_spareparts'] ?></td>
        <td><?= $s['merek_spareparts'] ?></td>
        <td><?= $s['jenis_spareparts'] ?></td>
        <td><?= $s['stok_spareparts'] ?></td>
        <td><?= number_to_currency($s['harga_spareparts'], 'IDR'); ?></td>
        <td>
            <a href="/admin/spareparts/edit/<?= $s['id']; ?>" class="btn btn-warning">Update</a>
            <form action="/admin/spareparts/<?= $s['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
            </form>
        </td>

    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>

</main>
<?= $this->endSection(); ?>