<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-1 w-100 navbar-scrollable">
        <div class="container">
            <a class="navbar-brand" href="index.php">

            <a class="navbar-brand" href="<?= base_url('admin') ?>">
                <img src="https://works.alfathony.com/tugas-web-enterprise/assets/img/logo-light.svg" alt="">
                <span class="g-sans-regular">Administrator</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/events') ?>">Semua Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/users') ?>">Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/master-data') ?>">Master Data</a>
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