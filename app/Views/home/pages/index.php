<?= $this->extend('home/layout/template'); ?>

<?= $this->section('content'); ?>

<section>
<input type="checkbox" id="check">
<header>
    
    <h2>
        <a href="#" class="logo">Dadangcor</a>
    </h2>

    <div class="navigation">
        <a href="<?= base_url('/customer');?>">Customer</a>
        <a href="<?= base_url('/admin');?>">Admin</a>
    </div>
    <label for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>

    </label>
</header>


<div class="content">
    <div class="info">
        <h2>Bengkel yang beda, <br><span>Melayani dengan bangga</span></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum quas velit optio dolor sed voluptates modi fuga dolorem similique dolores, inventore soluta quaerat magnam pariatur. Voluptatibus blanditiis repellendus ducimus? Booking Sekarang!!!</p>
        <a href="<?= base_url('/customer');?>" class="daftar-btn">Servis motorku</a>
    </div>
    
</div>
</section>

<?= $this->endSection(); ?>



