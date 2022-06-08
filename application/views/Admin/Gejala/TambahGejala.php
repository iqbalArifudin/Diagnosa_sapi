  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col">

                      <div class="card">
                          <div class="card-header">
                              Tambah Jenis Gejala
                          </div>
                          <div class="card-body">
                              <?php if (validation_errors()) : ?>
                              <div class="alert alert-danger" role="alert">
                                  <?= validation_errors(); ?>
                              </div>
                              <?php endif; ?>
                              <form action="" method="post" enctype="multipart/form-data">

                                  <center>
                                      <h5><strong>Masukkan Jenis Gejala</strong></h5>
                                  </center>
                                  <div class="form-group">
                                      <label for="nim">Jenis Gejala</label>
                                      <input type="text" class="form-control" id="jenis_gejala" name="jenis_gejala">
                                  </div>
                                  <div class="form-group">
                                      <label for="nim">Kode Gejala</label>
                                      <input type="text" class="form-control" id="kode_gejala" name="kode_gejala">
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-success "><i
                                          class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                  <a href="<?= base_url("admin/Gejala"); ?>" class="btn btn-info"><i
                                          class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
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