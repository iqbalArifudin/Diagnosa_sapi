<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Berita - Berita</h2>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($berita as $b) : ?>
            <div class="card-page  mr-3 mb-3" style="width:440px; height:600px">
                <center><img src="<?= base_url('assets/FotoBerita/') . $b->foto_berita ?>"
                        style="width:300px; height:330px;">
                    <br>
                </center>

                <center>
                    <hr width="90%">
                </center>
                <div class="text-muted">
                    <center>
                        <h5><?= $b->judul_berita ?></h5>
                        <a class="btn btn-primary rounded-pill fixed"
                            href='<?= base_url() . 'user/Berita/detail/' . $b->id_berita ?>'>
                            <i class="fas fa-eye"></i> Baca Selengkapnya
                        </a>
                    </center>
                </div>

                <center>
                    <br>
                </center>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section><!-- End About Us Section -->