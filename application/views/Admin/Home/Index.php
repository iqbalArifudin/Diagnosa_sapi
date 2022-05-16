<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-chart-line"></i> Beranda</h3>
            <p>
            <div class="alert alert-secondary" role="alert">
                <i class="nav-icon fas fa-chart-line"></i> Beranda &nbsp; &nbsp;
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-lg-5 col-xs-10">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        <?php echo $this->db->get('berita')->num_rows() ?>
                                    </h3>
                                    <p>Berita</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-newspaper"></i>
                                </div>
                                <a href="<?php echo base_url() . 'Admin/Berita' ?>" class="small-box-footer">More info
                                    <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-5 col-xs-10">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        <?php echo $this->db->get('penyakit')->num_rows() ?>
                                    </h3>
                                    <p>Jenis Penyakit</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fab fa-product-hunt"></i>
                                </div>
                                <a href="<?php echo base_url() . 'Admin/Penyakit' ?>" class="small-box-footer">More info
                                    <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-lg-5 col-xs-10">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        <?php echo $this->db->get('gejala')->num_rows() ?>
                                        <h3>
                                            <p>Jenis Gejala</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url() . 'Admin/Penyakit' ?>" class="small-box-footer">More
                                    info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-5 col-xs-10">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        <?php echo $this->db->get('user')->num_rows() ?>
                                        <h3>
                                            <p>User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-contact-outline"></i>
                                </div>
                                <a href="<?php echo base_url() . 'Admin/user' ?>" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="card">

                        <div class="d-flex justify-content-between">

                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->