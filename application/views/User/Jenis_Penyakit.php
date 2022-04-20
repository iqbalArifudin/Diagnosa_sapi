<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Jenis Penyakit Pada Sapi Perah</h2>
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
</section><!-- End About Us Section -->