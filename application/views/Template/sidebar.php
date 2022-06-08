<style>
nav-treeview:hover {
    color: #28a745;
}
</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url() . 'Peternak/Home' ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <?php foreach ($user as $p) : ?>
            <ul class="navbar-nav ml-auto">
                <span class="nav-item d-none d-sm-inline-block" style="color:aliceblue"><i
                        class="ion ion-ios-contact-outline"></i>&nbsp;
                    Hallo
                    <?= $p->nama ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </ul>
            <?php endforeach ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url() . 'Admin/Home' ?>" class="brand-link">
                <img src="<?php echo base_url() . 'assets/img/logo_KAN.png' ?>" width="80%" alt="AdminLTE Logo"
                    style="opacity: .8">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item ">
                            <a href="<?php echo base_url() . 'Peternak/Home' ?>" class="nav-link" id="navHome">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Peternak/Jenis_penyakit' ?>" class="nav-link"
                                id="navHome">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Jenis Penyakit
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Peternak/Diagnosa_penyakit' ?>" class="nav-link"
                                id="navHome">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                    Diagnosa Penyakit
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Peternak/Riwayat' ?>" class="nav-link" id="navHome">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    Riwayat Diagnosa
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'User/Login/logout'; ?>" class="nav-link" id="navHome">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>



                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>