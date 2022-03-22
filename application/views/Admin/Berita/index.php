<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="Berita/tambahberita">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>
                            Tambah Berita
                        </span>
                    </a>
                    <p>
                        <!-- Content Wrapper. Contains page content -->
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($berita as $brt): ?>
                            <tr>
                                <td><?= $brt->judul_berita ?></td>
                                <td><?= $brt->keterangan_berita ?></td>
                                <td><img src="<?= base_url('assets/FotoBerita/') . $brt->foto_berita ?>"
                                        style="width:50px; height:50px;"></td>
                                <td>
                                    <a class='btn btn-success'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus Berita ini?')"
                                        href="<?= base_url().'admin/berita/hapus/'.$brt->id_berita ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-primary'
                                        href="<?= base_url().'admin/berita/editberita/'.$brt->id_berita ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
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