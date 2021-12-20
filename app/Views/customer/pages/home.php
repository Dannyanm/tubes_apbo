<?= $this->extend('customer/layout/template'); ?>

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
            <h1 class="m-0">Profil</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-thin fa-fingerprint"></i> Kode</strong>
                            <p class="text-muted">
                                <?= $kode_customer; ?>
                            </p>
                            <hr>

                            <strong><i class="fas fa-solid fa-user"></i> Nama Lengkap</strong>
                            <p class="text-muted">
                                <?= $nama_customer; ?>
                            </p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                            <p class="text-muted">
                                <?= $alamat_customer; ?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-solid fa-phone"></i> No. Handphone</strong>
                            <p class="text-muted">
                                <?= $no_hp; ?>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card card-primary-->
                </div>
                <!-- / .col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>