 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>

     <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col">
                     <div class="card">
                         <div class="card-header">
                             DETAIL DATA PENYAKIT
                         </div>
                         <div class="card-body">
                             <?php foreach ($penyakit as $p) : ?>
                             <h6><strong>Jenis Penyakit :</strong> <?= $p->jenis_penyakit ?></h6>
                             <hr>
                             <h6><strong>Cara Pencegahan :</strong> <?= $p->pencegahan ?></h6>

                             <?php endforeach ?>
                             <p>
                             <div class="row">
                                 <div class="col">
                                     <table class="table table-bordered" id="">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Gejala</th>
                                                 <th>Aksi</th>
                                             </tr>
                                         </thead>
                                         <tbody>

                                         </tbody>
                                         <tfoot>
                                             <?php $no = 1;
                                                foreach ($rule as $g) : ?>
                                             <tr>
                                                 <td><?= $no++ ?></td>
                                                 <td><?= $g->jenis_gejala ?></td>
                                                 <td style="width:180px">
                                                     <a class='btn btn-danger'
                                                         onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                                         href="<?= base_url() . 'admin/penyakit/hapusRule/' . $g->id_gejala ?>">
                                                         <i class="fa fa-trash" aria-hidden="true"></i>
                                                     </a>
                                             </tr>
                                             <?php endforeach ?>
                                         </tfoot>
                                     </table>
                                     <center>
                                         <a class='btn btn-warning'
                                             href="<?= base_url() . 'Admin/Penyakit/tambahRule/' . $p->id_penyakit ?>">
                                             <i class="fas fa-plus" aria-hidden="true"><span> Tambah
                                                     Data Gejala</span></i>
                                         </a>
                                     </center>
                                     <br>


                                     <a href="<?= base_url("Admin/Penyakit/") ?>" class="btn btn-primary">Kembali</a>
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
         </div>
     </div>
 </div>