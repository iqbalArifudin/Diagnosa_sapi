<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="clearfix">

                <div class="float-right">
                    <a href="<?= base_url('Admin/Penyakit') ?>" class="btn btn-primary btn-sm"><i
                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                </div>
            </div>
            <hr>

            <h5> Data Penyakit :</h5>
            <br>
            <?php foreach ($penyakit as $p) : ?>

            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Jenis Penaykit</th>
                                <th>Cara Pencegahan</th>
                                <th>Gejala</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <?php foreach ($penyakit as $p) : ?>
                            <td><?= $p->jenis_penyakit ?></td>
                            <td><?= $p->pencegahan ?></td>
                            <!-- <td><?= $p->pencegahan ?></td> -->

                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
            <p>

                <?php endforeach ?>
            <h5> Data Pengajuan Keluarga :</h5>
            <br>
        </div>
    </div>
</div>