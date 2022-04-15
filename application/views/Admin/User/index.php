<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-primary"><i class="nav-icon fas fa-users"></i> Data User</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-secondary" role="alert">
                <i class="nav-icon fas fa-chart-line"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i
                    class="nav-icon fas fa-users"></i> User
            </div>
            <div class="row">
                <div class="col">
                    <!-- Tabel -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <span>
                                <br>
                                <?php
                                if (!empty($this->session->flashdata('pesan'))) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                }
                                ?>

                                <?php
                                if (!empty($this->session->flashdata('pesan2'))) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('pesan2'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                }
                                ?>

                                <?php
                                if (!empty($this->session->flashdata('pesan3'))) {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('pesan3'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                }
                                ?>
                            </span>

                            <table id="tabel" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No telp</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $usr) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $usr->nama ?></td>
                                        <td><?= $usr->alamat ?></td>
                                        <td><?= $usr->no_hp ?></td>
                                        <td><?= $usr->username ?></td>
                                        <td><?= $usr->level ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- /.card-body -->
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