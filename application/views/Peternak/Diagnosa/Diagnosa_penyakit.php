<link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-plus-circle"></i> Diagnosa Penyakit</h3>
            <p>
            <div class="alert alert-secondary" role="alert">
                <i class="nav-icon fas fa-chart-line"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp; <i
                    class="nav-icon fas fa-plus-circle"></i> Diagnosa Penyakit
            </div>
            <div class="alert alert-info" role="alert">
                <p>Anda dapat menambahkan Gejala yang dialami oleh Sapi Perah</p>
                <hr>
            </div>
            <div class="card">
                <div class="card-header">
                    Form Diagnosa Penyakit Pada Sapi Perah
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="<?= base_url('Peternak/Diagnosa_penyakit') ?>" method="post"
                        enctype="multipart/form-data">
                        <?php $no = 1;
                        foreach ($gejala as $g) : ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="gejala[]"
                                        aria-label="Checkbox for following text input" value="<?= $g['id_gejala']; ?>">
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox"
                                value="<?= $g['jenis_gejala']; ?>" disabled>
                            <br>
                        </div>
                        <?php endforeach ?>
                        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                        <!-- <a href="http://localhost/bankSampah/detail_donasi_member" class="btn btn-info">Cancel</a> -->
                    </form>
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