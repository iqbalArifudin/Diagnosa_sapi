<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="Penyakit/tambahpenyakit">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>
                            Tambah Data Penyakit
                        </span>
                    </a>
                    <p>
                        <!-- Content Wrapper. Contains page content -->
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penyakit as $p) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p->jenis_penyakit ?></td>
                                <td>
                                    <a class='btn btn-success'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus Data ini?')"
                                        href="<?= base_url() . 'admin/Penyakit/hapuspenyakit/' . $p->id_penyakit ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-primary'
                                        href="<?= base_url() . 'admin/Penyakit/editpenyakit/' . $p->id_penyakit ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'admin/Penyakit/detail_all/' . $p->id_penyakit ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span> Detail</span></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>