<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Spareparts</h1>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Flashdata message -->
            <div>
                <?php if(session()->getFlashdata('message')) : ?>
                        
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('message');?>
                        </div>
                    
                <?php endif; ?>
            </div>
            <!-- ./Flashdata message -->
            <!-- Table row -->
            <div class="invoice p-3 mb-3">
                <div class="row col-12">
                    <a href="<?= base_url('admin/adminspareparts/create');?>" class="btn btn-primary">Tambah Spareparts</a>
                </div>
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Kode Spareparts</th>
                                    <th scope="col" class="text-center">Gambar</th>
                                    <th scope="col" class="text-center">Kategori</th>
                                    <th scope="col" class="text-center">Merek</th>
                                    <th scope="col" class="text-center">Jenis Motor</th>
                                    <th scope="col" class="text-center">Stok</th>
                                    <th scope="col" class="text-center">Harga</th>
                                    <th scope="col" class="text-center">Aksi</th>
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
                                        <a href="/admin/adminspareparts/edit/<?= $s['id']; ?>" class="btn btn-warning">Update</a>
                                        <form action="/admin/adminspareparts/<?= $s['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                        <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.invoice p-3 mb-3 -->
            
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>