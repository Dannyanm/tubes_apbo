<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
<h2>Cek Cart</h2>

    <?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
    <?php endif; ?>


</main>

<?= $this->endSection(); ?>