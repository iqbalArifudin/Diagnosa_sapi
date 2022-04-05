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
                             Detail Data Penyakit
                         </div>
                         <div class="card-body">
                             <?php foreach ($penyakit as $p) : ?>

                             <div class="row">
                                 <div class="col">
                                     <table class="table table-bordered" id="">
                                         <thead>
                                             <tr>
                                                 <th>Jenis Penyakit</th>
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