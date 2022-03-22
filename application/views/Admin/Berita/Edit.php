<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Form Edit Berita
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>

                        <?php foreach ($berita as $berita) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_berita" value="<?= $berita->id_berita; ?>">

                            <div class="form-group">
                                <label for="merk">Judul Berita</label>
                                <input type="text" class="form-control" id="judul_berita" name="judul_berita"
                                    value="<?= $berita->judul_berita; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan_berita" name="keterangan_berita"
                                    value="<?= $berita->keterangan_berita; ?>">
                            </div>

                            <label for="file_surat">Foto Berita</label>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita">
                                <label class="custom-file-label" for="customFile"><?= $berita->foto_berita ?></label>
                                <?= form_error('foto_berita', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <p>

                            <div class="card" style="width: 18rem;">
                                <img src="<?= base_url('assets/FotoBerita/') . $berita->foto_berita ?>"
                                    class="card-img-top" alt="...">
                            </div>

                            <br>
                            <br>
                            <?php endforeach ?>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <a href="<?= base_url("admin/berita"); ?>" class="btn btn-info"><i
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