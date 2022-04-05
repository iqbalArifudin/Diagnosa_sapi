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
                              Form Edit Data Penyakit
                          </div>
                          <div class="card-body">
                              <?php if (validation_errors()) : ?>
                              <div class="alert alert-danger" role="alert">
                                  <?= validation_errors(); ?>
                              </div>
                              <?php endif; ?>
                              <?php foreach ($penyakit as $penyakit) : ?>
                              <form action="" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="id_penyakit" value="<?= $penyakit->id_penyakit; ?>">

                                  <div class="form-group">
                                      <label for="merk">Jenis Penyakit</label>
                                      <input type="text" class="form-control" id="jenis_penyakit" name="jenis_penyakit"
                                          value="<?= $penyakit->jenis_penyakit; ?>">
                                  </div>

                                  <div class="form-group">
                                      <label for="merk">Cara Pencegahan</label>
                                      <input type="text" class="form-control" id="pencegahan" name="pencegahan"
                                          value="<?= $penyakit->pencegahan; ?>">
                                  </div>

                                  <?php endforeach ?>
                                  <button type="submit" name="submit" class="btn btn-success "><i
                                          class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                  <a href="<?= base_url("admin/Penyakit"); ?>" class="btn btn-info"><i
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