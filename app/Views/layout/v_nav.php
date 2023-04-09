<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <?php
                $session = session();
                $user_name = $session->get('user_name');
            ?>
            <div class="pull-left info">
                <p><?= $user_name ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>

        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">OTHER NAVIGATION</li>
            <li>
                <a href="<?= base_url() ?>">
                <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('data/insertDataFitrah/') ?>">
                <i class="fa fa-plus"></i> <span>Tambah Data</span>
                </a>
            </li>
            <?php
                // Menghapus nilai dari variabel 'user_name' pada session
                $session->remove('user_name');
            ?>

            <!-- Menu keluar (logout) -->
            <li>
                <a href="<?= base_url('login') ?>">
                    <i class="fa fa-sign-out"></i> <span>Keluar</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('report') ?>">
                <i class="fa fa-print"></i> <span>Print Data</span>
                </a>
            </li>
            </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>

        </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">