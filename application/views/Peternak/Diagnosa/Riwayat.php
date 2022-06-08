<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="m-0 text-primary"> <i class="nav-icon fab fa-product-hunt"></i> Riwayat Diagnosa Penyakit</h3>
            <p>
            <div class="alert alert-secondary" role="alert">
                <i class="nav-icon fas fa-chart-line"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp; <i
                    class="nav-icon fab fa-product-hunt"></i> Riwayat Diagnosa Penyakit
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
                                        <th>Jenis Gejala</th>
                                        <th>Hasil Penyakit</th>
                                        <th>Cara Pencegahan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($riwayat_diagnosa as $p) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->gejala ?></ td>
                                        <td><?= $p->jenis_gejala ?></td>
                                        <td><?= $p->pencegahan ?></td>
                                        <td><?= $p->tanggal ?></td>

                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
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