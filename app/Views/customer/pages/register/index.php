<?= $this->extend('customer/layout/template_login'); ?>

<?= $this->section('content'); ?>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url('/') ?>" class="h1"><b>Dadang</b>Cornering</a>
            </div>
        <div class="card-body">
            <p class="login-box-msg">Register Customer</p>

            <?php if(session()->getFlashdata('message_error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('message_error');?>
                </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('message_success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message_success');?>
                </div>
            <?php endif; ?>

            <form method="post" action="registercustomer/register" method="post">
            <?= csrf_field(); ?>
                <div class="input-group mb-3">
                    <input type="text" class ="form-control " name="kode_customer" value="<?= $kode_customer ?>" disabled/>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class ="form-control" name="nama_customer" placeholder="Nama"/>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class ="form-control" name="username" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class ="form-control" name="password" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class ="form-control" name="alamat_customer" placeholder="Alamat">  
                </div>
                <div class="input-group mb-3">
                    <input type="text" class ="form-control" name="no_hp" placeholder="No. Handphone">
                </div>
                <div class="row">
                    <div class="col-8">
                        
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<?= $this->endSection(); ?>