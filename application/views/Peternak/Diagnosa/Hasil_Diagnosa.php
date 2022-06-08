<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-newspaper"></i>Hasil Diagnosa </h3>
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
                    <!-- Tabel -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabel" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>No</th> -->
                                        <th>Jenis Penyakit</th>
                                        <th>Cara Pencegahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- <td><?= $no++ ?></td> -->
                                        <td><?= $penyakit['jenis_penyakit'] ?></ td>
                                        <td><?= $penyakit['pencegahan'] ?></td>

                                    </tr>

                                </tbody>
                            </table>
                            <a href="<?= base_url("Peternak/Diagnosa_penyakit/") ?>" class="btn btn-primary">Kembali</a>
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