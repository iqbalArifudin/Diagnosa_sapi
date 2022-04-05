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
                             Detail Data Berita
                         </div>
                         <div class="card-body">
                             <!-- Tabel -->
                             <!-- /.card-header -->
                             <?php
                                foreach ($berita as $pmj) : ?>
                             <div class="card-body">
                                 <center><img src="<?= base_url('assets/FotoBerita/') . $pmj->foto_berita ?>"
                                         style="width:300px; height:300px;"></center>

                                 <p>
                                 <table class="table">
                                     <tr>
                                         <th>Judul</th>
                                         <td><?= $pmj->judul_berita ?></td>
                                     </tr>
                                     <tr>
                                         <th>Keterangan</th>
                                         <td><?= $pmj->keterangan_berita ?></td>
                                     </tr>
                                 </table>
                                 <br>
                                 <a href="<?= base_url("Admin/berita/") ?>" class="btn btn-primary">Kembali</a>
                             </div>
                             <?php endforeach ?>

                             <!-- /.card-body -->
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