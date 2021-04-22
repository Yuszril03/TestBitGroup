     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0 text-dark"> Home</h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item active">Home</li>

                         </ol>
                     </div><!-- /.col -->
                 </div><!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <div class="content">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="card card-primary card-outline">
                             <div class="card-body">
                                 <h5 class="card-title">Menampilkan Relasi Film - Aktor</h5><br><br>
                                 <table class="table">
                                     <thead class="thead-light">
                                         <tr>
                                             <th>No</th>
                                             <th>Nama Film</th>
                                             <th>Tahun Film</th>
                                             <th>Nama Aktor</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $no5 = 1;
                                            foreach ($soal5 as $row5) { ?>
                                             <tr>
                                                 <th scope="row"><?= $no5 ?></th>
                                                 <td><?= $row5['title'] ?></td>
                                                 <td><?= $row5['release_year'] ?></td>
                                                 <td><?= $row5['name_aktor'] ?></td>
                                             </tr>
                                         <?php $no5++;
                                            } ?>
                                     </tbody>
                                 </table>

                             </div>
                         </div><!-- /.card -->

                         <div class="card card-primary card-outline">
                             <div class="card-body">
                                 <h5 class="card-title">3 kategori paling favorit</h5><br><br>
                                 <table class="table">
                                     <thead class="thead-light">
                                         <tr>
                                             <th>No</th>
                                             <th>Nama Kategori</th>
                                             <th>Nama Film</th>
                                             <th>Tahun</th>
                                             <th>Tarif Sewa</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $no8 = 1;
                                            foreach ($Soal8->getResult('array') as $row8) { ?>
                                             <tr>
                                                 <th scope="row"><?= $no8 ?></th>
                                                 <td><?= $row8['name_kat'] ?></td>
                                                 <td><?= $row8['title'] ?></td>
                                                 <td><?= $row8['release_year'] ?></td>
                                                 <td><?= $row8['rental_rate'] ?></td>
                                             </tr>
                                         <?php $no8++;
                                            } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div><!-- /.card -->
                     </div>
                     <!-- /.col-md-6 -->
                     <div class="col-lg-6">
                         <div class="card card-primary card-outline">
                             <div class="card-body">
                                 <h5 class="card-title">5 kategori dengan film terbanyak</h5><br><br>
                                 <table class="table">
                                     <thead class="thead-light">
                                         <tr>
                                             <th>No</th>
                                             <th>Nama Ketegori</th>
                                             <th>Jumlah Film</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $no6 = 1;
                                            foreach ($Soal6->getResult('array') as $row6) { ?>
                                             <tr>
                                                 <th scope="row"><?= $no6 ?></th>
                                                 <td><?= $row6['name_kat'] ?></td>
                                                 <td><?= $row6['Total'] ?></td>
                                             </tr>
                                         <?php $no6++;
                                            } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div><!-- /.card -->

                         <div class="card card-primary card-outline">
                             <div class="card-body">
                                 <h5 class="card-title">5 film paling favorit</h5><br><br>
                                 <table class="table">
                                     <thead class="thead-light">
                                         <tr>
                                             <th>No</th>
                                             <th>Nama Film</th>
                                             <th>Tahun Film</th>
                                             <th>Tarif Sewa </th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $no7 = 1;
                                            foreach ($Soal7->getResult('array') as $row7) { ?>
                                             <tr>
                                                 <th scope="row"><?= $no7 ?></th>
                                                 <td><?= $row7['title'] ?></td>
                                                 <td><?= $row7['release_year'] ?></td>
                                                 <td><?= $row7['rental_rate'] ?></td>
                                             </tr>
                                         <?php $no7++;
                                            } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div><!-- /.card -->
                     </div>
                     <!-- /.col-md-6 -->
                 </div>
                 <!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content -->
     </div>