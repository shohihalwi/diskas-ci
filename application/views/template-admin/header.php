<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-1 w-100 navbar-scrollable">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(PATH_ADMIN . 'dashboard') ?>">
                <img src="<?= base_url('assets/images/logo-light.svg') ?>" alt="">
                <span class="g-sans-regular">Administrator</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(PATH_ADMIN . '/dashboard') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(PATH_ADMIN . '/events') ?>">Semua Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(PATH_ADMIN . '/users') ?>">Pengguna</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="nav-dropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Master Data</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="nav-dropdown">
                            <a class="dropdown-item" href="<?= base_url(PATH_ADMIN . '/masterdata/kategori') ?>">Kategori Event</a>
                            <a class="dropdown-item" href="<?= base_url(PATH_ADMIN . '/masterdata/fakultas') ?>">Fakultas</a>
                            <a class="dropdown-item" href="<?= base_url(PATH_ADMIN . '/masterdata/jurusan') ?>">Jurusan</a>
                            <a class="dropdown-item" href="<?= base_url(PATH_ADMIN . '/masterdata/lokasikampus') ?>">Lokasi Kampus</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="nav-dropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Laporan</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="nav-dropdown">
                            <a class="dropdown-item" href="#">Penjualan</a>
                            <a class="dropdown-item" href="#">Pengunjung</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#modalLoginForm"   class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div style="height: 100px"></div>

<section class="bg-white p-2 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h5 class="py-3 mb-0"><?= isset($title) ? $title : "Untitled" ?></h5>
            </div>
            <div class="col-md-4">
                <a href="#" class="btn btn-primary float-right">Tambah</a>
            </div>
        </div>
    </div>
</section>

