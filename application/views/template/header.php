<nav class="navbar navbar-expand-lg navbar-light white w-100 navbar-scrollable">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">

            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="https://works.alfathony.com/tugas-web-enterprise/assets/img/logo-light.svg" alt="">
                <span class="g-sans-regular">Mercubuana Events</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("homepage") ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("event/all_event") ?>">Semua Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("event/rekomendasi") ?>">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("homepage/FAQ") ?>">FAQ</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#modalLoginForm" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<div style="height: 100px"></div>