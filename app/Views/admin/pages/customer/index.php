<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
<h1>Data Customer</h1>

<?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
<?php endif; ?>

    <table class="table table-bordered ">
      <thead class="text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Handphone</th>
            <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $i = 1; ?>
        <?php foreach ($customer as $c) : ?>
        <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $c['kode_customer']; ?></td>
            <td><?= $c['nama_customer']; ?></td>
            <td><?= $c['alamat_customer']; ?></td>
            <td><?= $c['no_hp']; ?></td>
            <td class="text-center">
                <!-- <button href="/admin/mekanik/" class="btn btn-success">Detail</button> -->
                <!-- <a href="/admin/mekanik/edit/" class="btn btn-warning">Edit</a> -->
                <form action="/admin/customer/<?= $c['id_customer']; ?>" method="post" class="d-inline">
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