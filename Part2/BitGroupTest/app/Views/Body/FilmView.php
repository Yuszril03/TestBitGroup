     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0 text-dark"> Data Film </h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="<?= base_url() ?>">BitGroup</a></li>
                             <li class="breadcrumb-item active">Data Master</li>
                             <li class="breadcrumb-item active">Data Film</li>
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
                                         <h5 class="modal-title" id="staticBackdropLabel">Tambah Film</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <form id="myForm" action="">
                                             <div class="form-group">
                                                 <label for="">Judul</label>
                                                 <input type="text" onkeyup="up(this)" class="form-control" name="title" id="title" placeholder="Masukan Judul">
                                                 <div class="invalid-feedback">
                                                     Harap isi judul film
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="">Tahun Buat</label>
                                                 <input type="text" onkeyup="up(this)" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun Buat">
                                                 <div class="invalid-feedback">
                                                     Harap isi tahun pembuatan film
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="">Tarif Sewa</label>
                                                 <input type="text" onkeyup="up(this)" class="form-control" name="tarif" id="tarif" placeholder="Masukan Tarif Sewa">
                                                 <div class="invalid-feedback">
                                                     Harap isi tarif sewa
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="">Deskripsi</label>
                                                 <textarea name="des" id="des" onkeyup="up(this)" class="form-control" cols="3" rows="3"></textarea>
                                                 <div class="invalid-feedback">
                                                     Harap isi deskripsi
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
                                         <h5 class="modal-title" id="staticBackdropLabelH">Hapus Film</h5>
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
                                         <th>Movie Title</th>
                                         <th>Film Year</th>
                                         <th>description</th>
                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($Film as $rows) {
                                        ?>
                                         <tr>
                                             <th scope="row"><?= $no ?></th>
                                             <td><?= $rows['title'] ?></td>
                                             <td><?= $rows['release_year'] ?></td>
                                             <td><?= $rows['description'] ?></td>
                                             <td>
                                                 <!-- <button class="btn btn-info btn-sm"><i class="fa fa-info"></i></button> -->
                                                 <button onclick="modal(<?= $rows['id_film'] ?>)" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button>
                                                 <button onclick="modalH(<?= $rows['id_film'] ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
         var arryForm = ['title', 'tahun', 'des', 'tarif'];


         function hapus() {
             var data = {
                 id: document.getElementById('idDataH').value
             }
             $.ajax({
                 type: 'POST',
                 url: '<?= base_url() ?>/Film-hapus',
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
                         title: document.getElementById('title').value,
                         tahun: document.getElementById('tahun').value,
                         tarif: document.getElementById('tarif').value,
                         des: document.getElementById('des').value,
                     }
                     $.ajax({
                         type: 'POST',
                         url: '<?= base_url() ?>/Film-simpan',
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
                         title: document.getElementById('title').value,
                         tahun: document.getElementById('tahun').value,
                         tarif: document.getElementById('tarif').value,
                         des: document.getElementById('des').value,
                         id: document.getElementById('idData').value
                     }
                     $.ajax({
                         type: 'POST',
                         url: '<?= base_url() ?>/Film-edit',
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
                     url: '<?php echo base_url() ?>/Film/edit/' + id,
                     async: true,
                     dataType: 'json',
                     success: function(data) {
                         document.getElementById("myForm").reset();
                         document.getElementById("idd").value = "Edit";
                         document.getElementById('staticBackdropLabel').innerHTML = "Edit Data"
                         for (var i = 0; i < arryForm.length; i++) {
                             $('#' + arryForm[i]).removeClass("is-invalid");
                         }
                         document.getElementById(arryForm[0]).value = data['Film'][0].title;
                         document.getElementById(arryForm[1]).value = data['Film'][0].release_year;
                         document.getElementById(arryForm[2]).value = data['Film'][0].description;
                         document.getElementById(arryForm[3]).value = data['Film'][0].rental_rate;
                         document.getElementById('idData').value = data['Film'][0].id_film;
                         $('#staticBackdrop').modal('show')

                     }

                 });
             }


         }

         function up(id) {
             if (id.name == arryForm[1] || id.name == arryForm[2]) {
                 id.value = formatDesimal(id.value, "");
             }
             if (id.value == "") {

                 $('#' + id.name).addClass("is-invalid");
             } else {
                 $('#' + id.name).removeClass("is-invalid");
             }

         }

         function formatDesimal(angka, prefix) {
             var number_string = angka.replace(/[^,\d]/g, "").toString(),
                 split = number_string.split(","),
                 sisa = split[0].length % 3,
                 rupiah = split[0].substr(0, sisa),
                 ribuan = split[0].substr(sisa).match(/\d{3}/gi);

             // tambahkan titik jika yang di input sudah menjadi angka ribuan
             if (ribuan) {
                 separator = sisa ? "" : "";
                 rupiah += separator + ribuan.join("");
             }

             rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
             return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
         }
     </script>