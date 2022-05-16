<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-newspaper"></i> Jenis Penyakit </h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-secondary" role="alert">
                <i class="nav-icon fas fa-chart-line"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp; <i
                    class="nav-icon fas fa-newspaper"></i> Jenis Penyakit
            </div>
            <div class="row">
                <div class="col">
                    <!-- Tabel -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabel" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Penyakit</th>
                                        <th>Cara Pencegahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($penyakit as $p) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->jenis_penyakit ?></ td>
                                        <td><?= $p->pencegahan ?></td>

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