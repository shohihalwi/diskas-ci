<nav class="navbar navbar-expand-lg navbar-dark black w-100 navbar-scrollable">
        <div class="container">
            <a class="navbar-brand" href="index.php">

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
                        <a class="nav-link" href="?page=homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('semua-event') ?>">Semua Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('event-rekomendasi') ?>">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faq') ?>">FAQ</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#modalLoginForm"   class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('authentication/register') ?>"
                            class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>