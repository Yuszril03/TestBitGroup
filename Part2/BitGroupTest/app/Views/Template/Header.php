<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?= base_url() ?>/Bootstrap/Aseet/index3.html" class="navbar-brand">
            <img src="<?= base_url() ?>/Bootstrap/images/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">BitGroup</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url() ?>/Home" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="<?= base_url() ?>/Film" class="dropdown-item">Data Film</a></li>
                        <li><a href="<?= base_url() ?>/Kategori" class="dropdown-item">Data Kategori</a></li>
                        <li><a href="<?= base_url() ?>/Aktor" class="dropdown-item">Data Aktor</a></li>


                        <!-- End Level two -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/Film-Kategori" class="nav-link">Film - Kategori</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/Film-Aktor" class="nav-link">Film - Aktor</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url() ?>/Keluar" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                    </a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>

        </ul>
    </div>
</nav>