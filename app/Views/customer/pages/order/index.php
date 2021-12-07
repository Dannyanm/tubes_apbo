<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>

<h2>Halaman Order</h2>

<?php if(session()->getFlashdata('message')) : ?>
        
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message');?>
    </div>
    
<?php endif; ?>

<div class="my-2 mx-2" style="width: 18rem;">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title"><b>Servis</b></h5>
        <p class="card-text">Kalian bisa booking servis agar tidak mengantri!</p>
        <a href="<?= base_url('/customer/order/service');?>" class="button-toggler button-toggler-primary">Klik disini!</a>
      </div>
    </div>
    <div class="my-2 mx-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><b>Pesan Spareparts</b></h5>
            <p class="card-text">Dapatkan spareparts motor kalian dengan harga terbaik disini!</p>
            <a href="<?= base_url('/customer/order/spareparts');?>" class="button-toggler button-toggler-primary">Klik disini!</a>
        </div>
    </div>

</main>

<?= $this->endSection(); ?> 