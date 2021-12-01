<?= $this->extend('customer/layout/template_login'); ?>

<?= $this->section('content'); ?>


<div class="px-5 py-5">

<h2>Register Akun</h2>

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

<form method="post" action="registercustomer/register" >
    <?= csrf_field(); ?>
    <div class="my-2">
        <label for="kode_customer" class="form-label">Kode</label>
        <input type="text" class ="form-control " name="kode_customer" value="<?= $kode_customer ?>" disabled/>
        
    </div>
    <div class="my-2">
        <label for="nama_customer" class="form-label">Nama</label>
        <input type="text" class ="form-control" name="nama_customer" value=""/>
        
    </div>
    <div class="my-2">
        <label for="username" class="form-label">Username</label>
        <input type="text" class ="form-control" name="username" value="">
        
    </div>
    <div class="my-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class ="form-control" name="password" value="">
        
    </div>
    <div class="my-2">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class ="form-control" name="alamat" value="">
        
    </div>
    <div class="my-2">
        <label for="no_hp" class="form-label">No. Handphone</label>
        <input type="text" class ="form-control" name="no_hp" value="">
        
    </div>
    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>
</div>

<?= $this->endSection(); ?>