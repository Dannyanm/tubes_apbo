<?= $this->extend('customer/layout/template_login'); ?>

<?= $this->section('content'); ?>

<div class="px-5 py-5">

    <?php if(session()->getFlashdata('message')) : ?>
        
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('message');?>
        </div>
    
    <?php endif; ?>

    <form method="post" action="login/login">
        <?= csrf_field(); ?>
        
        <div class="my-2">
            <label for="username" class="form-label">Username</label>
            <input type="text" class ="form-control" name="username" required/>
        </div>
        <div class="my-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class ="form-control" name="password" required/>
        </div>
        
        <!-- <div>
            <input type="submit" value="Login" class="btn btn-primary"/>
        </div> -->
        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>