<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                        <div class="card-header">
                            Form Tambah Data Penyakit
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <br>

                                <div class="form-group">
                                    <label for="nim">Jenis Penyakit</label>
                                    <input type="text" class="form-control" id="jenis_penyakit" name="jenis_penyakit"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Cara Pencegahan</label>
                                    <input type="text" class="form-control" id="pencegahan" name="pencegahan" required>
                                </div>

                                <p>
                                    <center>
                                        <button type="submit" name="submit" class="btn btn-success "><i
                                                class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                        <a href="<?= base_url("admin/Penyakit"); ?>" class="btn btn-info"><i
                                                class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                    </center>
                            </form>
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