<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="containter-fluid py-2">
            <?php if(session()->getFlashdata('message')) : ?> 
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message');?>
                </div>
            <?php endif; ?>
            
            <div class="invoice p-3 mb-3">
                <div class="row">
                    <div class="col-12">
                    <h4>
                            <i class="fas fa-solid fa-cart-arrow-down"></i> Transaksi Selesai
                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                        </h4>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-sm-2 invoice-col">
                        Kode Transaksi
                        <br>
                        Kode Customer
                        <br>
                        Nama Customer
                        <br>
                        Tanggal Order
                    </div>
                    <div class="col-sm-4 invoice-col">
                        : <?= $transaksi['kode_transaksi']; ?>
                        <br>
                        : <?= $transaksi['kode_customer']; ?>
                        <br>
                        : <?= $transaksi['nama_customer']; ?>
                        <br>
                        : <?= $transaksi['tanggal_transaksi'];?>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Rowid</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Motor</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Tanggal Booking</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Harga Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($detailtransaksi as $dt) : ?>
                                <tr>
                                    <td scope="col"><?= $dt['rowid']; ?></td>
                                    <td scope="col"><?= $dt['id']; ?></td>
                                    <td scope="col"><?= $dt['qty']; ?></td>
                                    <td scope="col"><?= $dt['name']; ?></td>
                                    <td scope="col"><?= $dt['jenis_spareparts']; ?></td>
                                    <td scope="col"><?= $dt['merek_spareparts']; ?></td>
                                    <td scope="col"><?= $dt['tanggal_booking']; ?></td>
                                    <td scope="col"><?= number_to_currency($dt['price'], 'IDR'); ?></td>
                                    <td scope="col"><?= number_to_currency($dt['subtotal'], 'IDR'); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <p class="lead">Total Harga Akhir : </p>

                        <div class="table-responsive">
                                
                            <table class="table">
                                <tr>
                                    <th>Total:</th>
                                    <td><?= number_to_currency($dt['total_harga_transaksi'], 'IDR'); ?></td>
                                    <td>(LUNAS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        document.title="Transaksi <?= $transaksi['kode_transaksi']; ?>";
        window.print('content-wrapper');
    </script>
    
</div>


<?= $this->endSection(); ?>