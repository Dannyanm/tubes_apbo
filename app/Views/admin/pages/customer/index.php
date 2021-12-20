<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Customer</h1>
                </div><!-- /.col -->
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
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Kode</th>
                                    <th scope="col" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Alamat</th>
                                    <th scope="col" class="text-center">No. Handphone</th>
                                    <th scope="col" class="text-center">Aksi</th>
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