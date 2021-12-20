<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<?php

    if(isset($_SESSION)){
        $id_customer = $_SESSION['id_customer'];
        $kode_customer = $_SESSION['kode_customer'];
        $nama_customer = $_SESSION['nama_customer'];
        $alamat_customer = $_SESSION['alamat_customer'];
        $no_hp = $_SESSION['no_hp'];
        $todayDate = date("Y-m-d");
    };

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid py-2">
            <?php if(session()->getFlashdata('message')) : ?> 
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message');?>
                </div>
            <?php endif; ?>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row ">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-solid fa-cart-arrow-down"></i> Keranjang
                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                        </h4>
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- / .row  -->
                <div class="row invoice-info">
                    <div class="col-sm-2 invoice-col">
                        Kode 
                        <br>
                        Nama 
                        <br>
                        Alamat 
                        <br>
                        No. Handphone 
                        <br>
                        Tanggal Order
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        : <?= $kode_customer; ?>
                        <br>
                        : <?= $nama_customer; ?>
                        <br>
                        : <?= $alamat_customer; ?>
                        <br>
                        : <?= $no_hp; ?>
                        <br>
                        : <?= $todayDate; ?>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- / .row -->
                <!-- Table row -->
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Row</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Motor</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Tanggal Booking</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Harga Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $keranjang = $cart->contents();
                                foreach ($keranjang as $key => $value){
                            ?>
                                <tr>
                                    <td scope="col"><?= $value['qty']; ?></td>
                                    <td scope="col"><?= $value['rowid']; ?></td>
                                    <td scope="col"><?= $value['id']; ?></td>
                                    <td scope="col"><?= $value['name']; ?></td>
                                    <td scope="col"><?= $value['options']['jenis_spareparts']; ?></td>
                                    <td scope="col"><?= $value['options']['merek_spareparts']; ?></td>
                                    <td scope="col"><?= $value['options']['tanggal_booking']; ?></td>
                                    <td scope="col"><?= number_to_currency($value['price'], 'IDR'); ?></td>
                                    <td scope="col"><?= number_to_currency($value['subtotal'], 'IDR'); ?></td>
                                    <td>
                                        <a href="<?= base_url('customer/customerkeranjang/deleteitem/' . $value['rowid']); ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <p class="lead">Biaya yang harus dibayar : </p>

                        <div class="table-responsive">
                                
                            <table class="table">
                                <?php 
                                    $keranjang = $cart->contents();
                                ?>
                                <tr>
                                    <th>Total:</th>
                                    <td><?= number_to_currency($cart->total(), 'IDR'); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <form action="customerkeranjang/submitpesanan">
                            <?php
                                
                                $keranjang = $cart->contents();
                                $value = $keranjang;
                                $nama_customer = $_SESSION['nama_customer'];
                                $total_harga_transaksi = $cart->total();

                            ?>
                            <input type="hidden" name="kode_transaksi" value="<?= $kode_transaksi; ?>">
                            <input type="hidden" name="kode_customer" value="<?= $kode_customer; ?>">
                            <input type="hidden" name="nama_customer" value="<?= $nama_customer; ?>">
                            <input type="hidden" name="tanggal_transaksi" value="<?= $todayDate; ?>">
                            <input type="hidden" name="total_harga_transaksi" value="<?= $total_harga_transaksi; ?>">
                        <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Order</button>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- invoice p-3 mb-3 -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>