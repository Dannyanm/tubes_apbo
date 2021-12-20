<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Spareparts</h1>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Flashdata message -->
            <div>
                <?php if(session()->getFlashdata('message')) : ?>
                        
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('message');?>
                        </div>
                    
                <?php endif; ?>
            </div>
            <!-- ./Flashdata message -->
            <!-- Table row -->
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Update Spareparts</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="/admin/adminspareparts/update/<?= $spareparts['id']; ?>" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="stok_spareparts" class="form-label">Stok Spareparts</label>
                                        <input type="text" class ="form-control" name="stok_spareparts" value="<?= $spareparts['stok_spareparts'] ?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_spareparts" class="form-label">Harga Spareparts</label>
                                        <input type="text" class ="form-control" name="harga_spareparts" value="<?= $spareparts['harga_spareparts'] ?>" required/>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            <!-- /.invoice p-3 mb-3 -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>