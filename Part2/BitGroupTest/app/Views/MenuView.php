<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $segment ?></title>

    <link rel="icon" type="image/png" href="<?= base_url() ?>/Bootstrap/images/icon.png" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/Bootstrap/Aseet/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/Bootstrap/Aseet/dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>/asset/plugins/bootstrap/css/bootstrap.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Optional -->
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?= view('Template/Header') ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?php if ($segment == "Home") {
            echo view('Body/HomeView');
        } else if ($segment == "Film") {
            echo view('Body/FilmView');
        } else if ($segment == "Kategori") {
            echo view('Body/KategoriView');
        } else if ($segment == "Aktor") {
            echo view('Body/AktorView');
        } else if ($segment == "Film-Aktor") {
            echo view('Body/FilmAktorView');
        } else if ($segment == "Film-Kategori") {
            echo view('Body/FilmKategoriView');
        }

        ?>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?= view('Template/Footer') ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/Bootstrap/Aseet/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/Bootstrap/Aseet/dist/js/adminlte.min.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?= base_url() ?>/Bootstrap/Aseet/plugins/chart.js/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

    <script>
        $(function() {
            $('#film').DataTable({
                "pageLength": 10,
                "searching": true,
                "lengthChange": false,
                "bInfo": false,
                "bPaginate": true,
                "ordering": true,
                "language": {
                    "emptyTable": 'Data Kosong',
                    'search': '',
                    'searchPlaceholder': "Pencarian..."
                }
            });
        });
    </script>
</body>

</html>