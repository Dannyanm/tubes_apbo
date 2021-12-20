<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Spareparts</h1>
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
                                <h3 class="card-title">Form Tambah Spareparts</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="/admin/adminspareparts/save" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_spareparts" class="form-label">Kode Spareparts</label>
                                        <input type="text" class="form-control " name="kode_spareparts" value="<?= $kode_spareparts ?>" disabled/>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori_spareparts" class="form-label">Kategori</label>
                                        <input type="text" class="form-control" name="kategori_spareparts"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="merek_spareparts" class="form-label">Merek</label>
                                        <input type="text" class="form-control" name="merek_spareparts"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_spareparts" class="form-label">Jenis Motor</label>
                                        <select class="form-select" name="jenis_spareparts">
                                            <option value="Matic">Matic</option>
                                            <option value="Manual">Manual</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok_spareparts" class="form-label">Stok</label>
                                        <input type="text" class ="form-control" name="stok_spareparts"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_spareparts" class="form-label">Harga</label>
                                        <input type="text" class ="form-control" name="harga_spareparts"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar" class="form-label">Pilih Gambar</label>
                                        <input type="file" class ="form-control" name="gambar" />
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