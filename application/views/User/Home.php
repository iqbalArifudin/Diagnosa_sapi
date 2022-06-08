<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image: url(<?= base_url() . 'assets/img/slide-1.jpg'; ?>)">
                <div class="container">
                    <h2>Koperasi Agro Niaga (KAN) <span>JABUNG</span></h2>
                    <p>Memberikan kontribusi bagi pengembangkan usaha peternakan sapi perah kerakyatan dan mempromosikan
                        budidaya sapi perah sebagai solusi untuk meningkatkan pendapatan dan kesejahteraan keluarga
                        peternak.</p>
                    <a href="<?php echo base_url() . 'User/Login' ?>" class="btn-get-started scrollto">Diagnosa Penyakit
                        Sapi</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image:  url(<?= base_url() . 'assets/img/slide-2.jpg'; ?>)">
                <div class="container">
                    <h2>Koperasi Agro Niaga (KAN) <span>JABUNG</h2>
                    <p>Memberikan kontribusi bagi pengembangkan usaha peternakan sapi perah kerakyatan dan mempromosikan
                        budidaya sapi perah sebagai solusi untuk meningkatkan pendapatan dan kesejahteraan keluarga
                        peternak.</p>
                    <a href="<?php echo base_url() . 'User/Login' ?>" class="btn-get-started scrollto">Diagnosa Penyakit
                        Sapi</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image:  url(<?= base_url() . 'assets/img/slide3.jpg'; ?>)">
                <div class="container">
                    <h2>Koperasi Agro Niaga (KAN) <span>JABUNG</h2>
                    <p>Memberikan kontribusi bagi pengembangkan usaha peternakan sapi perah kerakyatan dan mempromosikan
                        budidaya sapi perah sebagai solusi untuk meningkatkan pendapatan dan kesejahteraan keluarga
                        peternak.</p>
                    <a href="<?php echo base_url() . 'User/Login' ?>" class="btn-get-started scrollto">Diagnosa Penyakit
                        Sapi</a>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <?php foreach ($berita as $b) : ?>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="<?= base_url('assets/FotoBerita/') . $b->foto_berita ?>"
                        style="width:500px; height:330px;">
                    <p>
                        <!-- <img src="<?= base_url(); ?>assets/img/about.jpg" class="img-fluid" alt=""> -->
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?= $b->judul_berita ?></h3>
                    <p class="fst-italic">
                        <?= $b->keterangan_berita ?>
                    </p>

                </div>
                <?php endforeach ?>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Jaga Kesehatan Sapi Anda & Jaga Kualitas Susu Terbaik ?</h3>
                <a class="cta-btn scrollto" href="<?php echo base_url() . 'User/Login' ?>">Diagnosa Kesehatan Sapi</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Jenis Penyakit Pada Sapi</h2>
            </div>

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

        </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <section id="contact" class="contact">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Suropati No. 4- 6
                        Ds. Kemantren, Kec. Jabung, Kab. Malang
                        Jawa Timur 65155</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>surat@kanjabung.com<br></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Telepon</h3>
                    <p>(0341) 791 277 / WA 082125422543</p>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Hubungi Kami</h2>
            </div>

        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen></iframe>
        </div>

    </section>End Contact Section -->

</main><!-- End #main -->