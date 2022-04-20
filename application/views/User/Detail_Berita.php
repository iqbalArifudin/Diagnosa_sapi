<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow-sm border-bottom-primary">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col">
                                <div class="card-header">
                                    <center><strong>Detail Berita</strong></center>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <?php foreach ($berita as $pmj) : ?>
                                        <div class="form-row">
                                            <center>
                                                <div class="form-group col-md-5">
                                                    <img src="<?= base_url('assets/FotoBerita/') . $pmj->foto_berita ?>"
                                                        class="card-img-top" style="height: 370px;">
                                                    <p>
                                                        <br>
                                                </div>
                                            </center>
                                            <div class="form-group">
                                                <h5 class="card-title"><strong><?= $pmj->judul_berita ?></strong></h5>
                                                <p class="card-text"><?= $pmj->keterangan_berita ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        <p>
                                            <center><a href="<?= base_url("user/Berita/"); ?>" class="btn btn-primary">
                                                    <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                            </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>