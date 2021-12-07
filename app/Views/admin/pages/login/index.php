<?= $this->extend('admin/layout/template_login'); ?>

<?= $this->section('content'); ?>

<div class="center">

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

    <!-- <form method="post" action="login/login" class="py-2">
        <?= csrf_field(); ?>
        
        <div class="my-2">
            <label for="username" class="form-label">Username</label>
            <input type="text" class ="form-control" name="username" required/>
        </div>
        <div class="my-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class ="form-control" name="password" required/>
        </div> -->
        
        <!-- <div>
            <input type="submit" value="Login" class="btn btn-primary"/>
        </div> -->
        <!-- <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form> -->
    

    <h2>Login Admin</h2>
    <form method="post" action="login/login">
        
        <?= csrf_field(); ?>
        
        <div class="txt-field">
            <input type="text" name="username" required/>
            <span></span>
            <label for="username" class="">Username</label>
        </div>
        <div class="txt-field">
            <input type="password" name="password" required/>
            <span></span>
            <label for="password" class="">Password</label>
        </div>
        <!-- <div class="forgot-pass">Forgot Password?</div> -->
        
        <!-- <div>
            <input type="submit" value="Login" class="btn btn-primary"/>
        </div> -->
        <div>
            <button type="submit" class="">Login</button>
        </div>
        <div class="registrasi-link">
            <a href="<?= base_url('');?>" > << Kembali</a>
        </div>
    </form>



    
</div>

<?= $this->endSection('content'); ?>