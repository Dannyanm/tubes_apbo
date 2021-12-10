<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <h1>Keranjang</h1>
    <?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
    <?php endif; ?>

    <div>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Motor</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php 
                    $keranjang = $cart->contents();
                    foreach ($keranjang as $key => $value){
                ?>
                
                <tr>
                    <td scope="col"><?= $value['qty']; ?></td>
                    <td scope="col"><?= $value['id']; ?></td>
                    <td scope="col"><?= $value['name']; ?></td>
                    <td scope="col"><?= $value['options']['jenis_spareparts']; ?></td>
                    <td scope="col"><?= $value['options']['merek_spareparts']; ?></td>
                    <td scope="col"><?= number_to_currency($value['price'], 'IDR'); ?></td>
                    <td scope="col"><?= number_to_currency($value['subtotal'], 'IDR'); ?></td>
                    <td></td>
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>

<?= $this->endSection(); ?>