
<nav class="navbar navbar-expand-lg navbar-light white w-100 border-bottom navbar-scrollable">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/eventmercubuana-logo.svg') ?>" alt="logo mercubuana" style="height: 38px; margin-right: 8px">

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
                    <li class="nav-item">
                        <a href="<?= base_url('authentication/register') ?>" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<div style="height: 100px"></div>