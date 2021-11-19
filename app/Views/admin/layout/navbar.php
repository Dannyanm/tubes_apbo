<!-- sidebar -->
<div class="border-end" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom">
            <a href="<?= base_url('/');?>">Dadang Cornering</a>
    
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin');?>">Home</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin/mekanik');?>">Data Mekanik</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin/member');?>">Data Member</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin/service');?>">Data Service</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin/spareparts');?>">Data Spareparts</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/admin/transaksi');?>">Data Transaksi</a>
        </div>
    </div>

    <!-- page content wrapper -->
    <div id="page-content-wrapper">
        <!-- Top navigation / navbar / header -->
        <nav class="navbar navbar-expand-lg border-bottom">
            <div class="container-fluid">
                <button class="button-toggler button-toggler-primary" id="sidebarToggle">///</button>

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="collapse-toggler-icon"><?= $user_status; ?></span>
                </button> -->
                
                <div class="nav-item dropdown">
                    <a class="user-option dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user_status; ?></a>
                    <div class="dropdown-menu dropdown-menu-end pr-8" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">Profil</a>
                        <a class="dropdown-item" href="#!">Logout</a>
                            <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!" disabled>Something else here</a> 
                            </div>  -->
                </div>
            </div>
        </nav>
