<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Transaksi</h1>
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
                <div class="row col-12 my-2">
                    <h3 class="card-title">Transaksi Belum Selesai</h3>
                </div>
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Kode Transaksi</th>
                                    <th scope="col" class="text-center">Kode Customer</th>
                                    <th scope="col" class="text-center">Nama Customer</th>
                                    <th scope="col" class="text-center">Tanggal Pesan</th>
                                    <th scope="col" class="text-center">Total Harga</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <?php $i = 1; ?>
                            <?php foreach ($transaksi as $t) : ?>
                                <tr>
                                    <td><?= $t['kode_transaksi']; ?></td>
                                    <td><?= $t['kode_customer']; ?></td>
                                    <td><?= $t['nama_customer']; ?></td>
                                    <td><?= $t['tanggal_transaksi']; ?></td>
                                    <td><?= number_to_currency($t['total_harga_transaksi'], 'IDR'); ?></td>
                                    <td>
                                        <button class="btn btn-danger" disabled>Belum Selesai</button>
                                    </td>
                                    <td class="text-center">
                                        <!-- need fix here, detail pindahkan ke tabel transaksi selesai dan diubah menjadi print bukti transaksi -->
                                    <a href="admintransaksi/detail/<?= $t['kode_transaksi']; ?>" class="btn btn-primary">Detail</a>
                                        <!-- <form action="/admin/admintransaksi/selesai/<?= $t['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="kode_transaksi" value="<?= $t['kode_transaksi']; ?>">
                                            <input type="hidden" name="kode_customer" value="<?= $t['kode_customer']; ?>">
                                            <input type="hidden" name="nama_customer" value="<?= $t['nama_customer']; ?>">
                                            <input type="hidden" name="tanggal_transaksi" value="<?= $t['tanggal_transaksi']; ?>">
                                            <input type="hidden" name="total_harga_transaksi" value="<?= $t['total_harga_transaksi']; ?>"> 
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah transaksi ini sudah selesai?')">Proses Order</button>
                                        </form> -->
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
            <div class="invoice p-3 mb-3">
                <div class="row col-12 my-2">
                    <h3 class="card-title">Transaksi Selesai</h3>
                </div>
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Kode Transaksi</th>
                                    <th scope="col" class="text-center">Kode Customer</th>
                                    <th scope="col" class="text-center">Nama Customer</th>
                                    <th scope="col" class="text-center">Tanggal Pesan</th>
                                    <th scope="col" class="text-center">Total Harga</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <?php $i = 1; ?>
                            <?php foreach($tselesai as $ts) : ?>
                                <tr>
                                    <td><?= $ts['kode_transaksi']; ?></td>
                                    <td><?= $ts['kode_customer']; ?></td>
                                    <td><?= $ts['nama_customer']; ?></td>
                                    <td><?= $ts['tanggal_transaksi']; ?></td>
                                    <td><?= number_to_currency($ts['total_harga_transaksi'], 'IDR'); ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-success" disabled>Selesai</button>
                                    </td>
                                    <td>
                                        <a href="admintselesai/detail/<?= $ts['kode_transaksi']; ?>" class="btn btn-primary">Detail</a>
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