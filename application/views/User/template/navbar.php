<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img style="background-color: white; delay:4s;" class="animation__shake" src="<?= base_url(); ?>assets/img/slider/loading.gif" alt="AdminLTELogo" height="150" width="150">
    <h1>Loading...</h1>
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url(); ?>page" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() . 'assets/img/home/img/logo1.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: #6495ED;">Dashboard|Member</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: #FF8C00;"><?= $user['nama']; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!--<div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php
                $menu_member = $this->db->get('member_menu')->result_array();
                foreach ($menu_member as $mm) :
                    if ($mm['title'] == $title) :
                ?>
                        <li class="nav-item menu-open has-treeview">
                            <a href="<?= base_url($mm['url']) ?>" class="nav-link active">
                                <i class="$mm['icon']"></i>
                                <p>
                                    <?= $mm['title'] ?>
                                    <!--<i class="right fas fa-angle-left"></i>-->
                                </p>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="<?= base_url($mm['url']) ?>" class="nav-link">
                                <i class="$mm['icon']"></i>
                                <p>
                                    <?= $mm['title'] ?>
                                    <!--<span class=" right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>