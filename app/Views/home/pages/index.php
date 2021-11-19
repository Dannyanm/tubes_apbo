<?= $this->extend('home/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="p-5 text-center">

    <h1>SELAMAT DATANG DI BENGKEL DADANG CORNERING</h1>

    <a href="<?= base_url('/admin'); ?>">Ke Halaman Admin</a>
    ||
    <a href="<?= base_url('/customer'); ?>">Ke Halaman Customer</a>
    ||
    <a href="<?= base_url('/login'); ?>">Ke Halaman Login</a>

</div>
<?= $this->endSection(); ?>



