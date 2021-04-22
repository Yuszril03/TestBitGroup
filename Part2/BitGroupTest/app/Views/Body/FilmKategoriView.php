     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0 text-dark"> Data Film-Kategori </h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="<?= base_url() ?>">BitGroup</a></li>
                             <li class="breadcrumb-item active">Data Film Kategori</li>
                         </ol>
                     </div><!-- /.col -->
                 </div><!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <div class="content">
             <div class="container">
                 <div class="card">
                     <div class="card-body">
                         <button type="button" onclick="modal(00)" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</button> <br><br>
                         <!-- Modal -->
                         <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="staticBackdropLabel">Tambah Film-Kategori</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <form id="myForm" action="">
                                             <div class="form-group">
                                                 <label for="">Nama Kategori</label>
                                                 <select name="kategori" id="kategori" class="form-control">
                                                     <option value="0">Pilih Kategori</option>
                                                     <?php foreach ($Kategori as $row1) { ?>
                                                         <option value="<?= $row1['id_kat'] ?>"><?= $row1['name_kat'] ?></option>
                                                     <?php } ?>
                                                 </select>
                                                 <div class="invalid-feedback">
                                                     Harap pilih nama Aktor
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="">Nama Film</label>
                                                 <select name="film2" id="film2" class="form-control">
                                                     <option value="0">Pilih Film</option>
                                                     <?php foreach ($Film as $row2) { ?>
                                                         <option value="<?= $row2['id_film'] ?>"><?= $row2['title'] ?></option>
                                                     <?php } ?>
                                                 </select>
                                                 <div class="invalid-feedback">
                                                     Harap pilih nama film
                                                 </div>
                                             </div>

                                             <input type="hidden" id="idd" name="idd">
                                             <input type="hidden" id="idData" name="idData">
                                         </form>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         <button id="submit" onclick="simpan()" type="button" class="btn btn-primary">Simpan</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- Modal Delet -->
                         <div class="modal fade" id="hapus" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="staticBackdropLabelH">Hapus Film Kategori</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <form id="myForm" action="">
                                             <p class="text-capitalize text-center"> Apakah anda yakin untuk menghapusnya ?</p>
                                             <input type="hidden" id="idDataH" name="idDataH">
                                         </form>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         <button id="submit" onclick="hapus()" type="button" class="btn btn-danger">Hapus</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="table-responsive">
                             <table id="film" class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Film</th>
                                         <th>Tahun Film</th>
                                         <th>Nama Kategori</th>
                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($FilmKategori as $rows) {
                                        ?>
                                         <tr>
                                             <th scope="row"><?= $no ?></th>
                                             <td><?= $rows['title'] ?></td>
                                             <td><?= $rows['release_year'] ?></td>
                                             <td><?= $rows['name_kat'] ?></td>
                                             <td>
                                                 <!-- <button class="btn btn-info btn-sm"><i class="fa fa-info"></i></button> -->
                                                 <button onclick="modal(<?= $rows['id_fc'] ?>)" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button>
                                                 <button onclick="modalH(<?= $rows['id_fc'] ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                             </td>
                                         </tr>
                                     <?php $no++;
                                        } ?>
                                 </tbody>
                             </table>

                         </div>

                     </div>
                 </div>
                 <!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content -->
     </div>
     <script>
         var arryForm = ['kategori', 'film2'];
         document.getElementById("kategori").value = "0";
         document.getElementById('film2').value = "0";

         function hapus() {
             var data = {
                 id: document.getElementById('idDataH').value
             }
             $.ajax({
                 type: 'POST',
                 url: '<?= base_url() ?>/Film-Kategori-hapus',
                 data: data,
                 success: function(data) {
                     //  console.log(data)
                     if (data == 1) {
                         location.reload();
                     } else {

                         $('#hapus').modal('hide')
                     }
                 }
             })
         }

         function modalH(id) {
             document.getElementById('idDataH').value = id;
             $('#hapus').modal('show')
         }

         function simpan() {
             if (document.getElementById("idd").value == "Add") {
                 var jumlah = 0;
                 for (var i = 0; i < arryForm.length; i++) {
                     if (document.getElementById(arryForm[i]).value == "") {
                         $('#' + arryForm[i]).addClass("is-invalid");
                         jumlah++;
                     } else {
                         $('#' + arryForm[i]).removeClass("is-invalid");
                     }
                 }
                 if (jumlah == 0) {
                     var data = {
                         kategori: document.getElementById('kategori').value,
                         film: document.getElementById('film2').value,
                     }
                     $.ajax({
                         type: 'POST',
                         url: '<?= base_url() ?>/Film-Kategori-simpan',
                         data: data,
                         success: function(data) {
                             if (data == 1) {
                                 location.reload();
                             } else {
                                 Swal.fire({
                                     icon: 'error',
                                     title: 'Oops...',
                                     text: 'Data gagal tersimpan!',
                                 })
                                 $('#staticBackdrop').modal('hide')
                             }
                         }
                     })
                 }

             } else {
                 var jumlah = 0;
                 for (var i = 0; i < arryForm.length; i++) {
                     if (document.getElementById(arryForm[i]).value == "") {
                         $('#' + arryForm[i]).addClass("is-invalid");
                         jumlah++;
                     } else {
                         $('#' + arryForm[i]).removeClass("is-invalid");
                     }
                 }
                 if (jumlah == 0) {
                     var data = {
                         kategori: document.getElementById('kategori').value,
                         film: document.getElementById('film2').value,
                         id: document.getElementById('idData').value
                     }
                     $.ajax({
                         type: 'POST',
                         url: '<?= base_url() ?>/Film-Kategori-edit',
                         data: data,
                         success: function(data) {
                             if (data == 1) {
                                 location.reload();
                             } else {

                                 $('#staticBackdrop').modal('hide')
                             }
                         }
                     })
                 }
             }
         }

         function modal(id) {
             if (id == 00) {
                 document.getElementById("myForm").reset();
                 document.getElementById("idd").value = "Add";
                 document.getElementById('staticBackdropLabel').innerHTML = "Tambah Data"
                 for (var i = 0; i < arryForm.length; i++) {
                     $('#' + arryForm[i]).removeClass("is-invalid");
                 }
                 $('#staticBackdrop').modal('show')
             } else {
                 $.ajax({
                     type: 'GET',
                     url: '<?php echo base_url() ?>/FilmKategori/edit/' + id,
                     async: true,
                     dataType: 'json',
                     success: function(data) {
                         document.getElementById("myForm").reset();
                         document.getElementById("idd").value = "Edit";
                         document.getElementById('staticBackdropLabel').innerHTML = "Edit Data"
                         for (var i = 0; i < arryForm.length; i++) {
                             $('#' + arryForm[i]).removeClass("is-invalid");
                         }
                         document.getElementById(arryForm[0]).value = data['FilmKategori'][0].category_id;
                         document.getElementById(arryForm[1]).value = data['FilmKategori'][0].film__id;
                         document.getElementById('idData').value = data['FilmKategori'][0].id_fc;
                         $('#staticBackdrop').modal('show')

                     }

                 });
             }


         }

         function up(id) {

             if (id.value == "") {

                 $('#' + id.name).addClass("is-invalid");
             } else {
                 $('#' + id.name).removeClass("is-invalid");
             }

         }
     </script>