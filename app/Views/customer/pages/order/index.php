<?= $this->extend('Views/customer/layout/template'); ?>

<?= $this->section('content'); ?>

<?php

    if(isset($_SESSION)){
        $id_customer = $_SESSION['id_customer'];
        $kode_customer = $_SESSION['kode_customer'];
        $nama_customer = $_SESSION['nama_customer'];
        $alamat_customer = $_SESSION['alamat_customer'];
        $no_hp = $_SESSION['no_hp'];
    };

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Order</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order Service</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/customer/customerorder/tambahkeranjang">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_spareparts">Kode</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="kode_spareparts" value="<?= $kode_service; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="kategori_spareparts" value="Service">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="merek_spareparts" value="-">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_booking">Tanggal Booking</label>
                                    <input type="date" name="tanggal_booking" class="form-control" id="exampleInputPassword1" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Motor</label>
                                    <select class="form-control" name="jenis_spareparts" >
                                        <option value="Manual">Manual</option>
                                        <option value="Matic">Matic</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="harga_spareparts" >
                                        <option value="80000">Manual IDR 80,000</option>
                                        <option value="100000">Matic IDR 100,000</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Tambah ke Keranjang</button>
                            </div>
                        </form>
                        <!-- /.form start -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- / .col-md-6 -->
            </div>
            <!-- /.row -->

            
            <!-- / .row -->
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($spareparts as $s) { ?>
                <div class="col-md-20 mx-2">
                    <div class="card">

                        <div class="card-body">
                            <img src="/img/<?= $s['gambar']; ?>" class="gambar-spareparts" alt="gambar">
                        </div>
                        <div class="card-body">
                            Kode : <?= $s['kode_spareparts']; ?>
                            <br>
                            Kategori : <?= $s['kategori_spareparts']; ?>
                            <br>
                            Merek : <?= $s['merek_spareparts']; ?>
                            <br>
                            Jenis Motor : <?= $s['jenis_spareparts']; ?>
                            <br>
                            Stok : <?= $s['stok_spareparts']; ?>
                            <br>
                            Harga : <?= number_to_currency($s['harga_spareparts'], 'IDR'); ?>
                        </div>
                        
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form method="post" action="/customer/customerorder/tambahkeranjang">
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
                                                
                                                <!-- <div>
                                                    <input type="submit" value="Tambah ke Keranjang" class="btn btn-success"/>
                                                </div> -->
                                    <button type="submit" class="btn btn-success">Tambah ke Keranjang</button>
                                </form>
                        
                            
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- / .col-md-6 -->
                <?php }; ?>
            </div>
            <!-- / .row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>