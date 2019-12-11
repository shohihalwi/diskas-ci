<nav class="navbar navbar-expand-lg navbar-light white w-100 navbar-scrollable border-bottom">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/eventmercubuana-logo.svg') ?>" alt="logo mercubuana" style="height: 38px; margin-right: 8px">

                <span class="g-sans-regular">UMB Event</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("event/all-events") ?>">All Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("event/rekomendasi") ?>">Recommendations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("homepage/FAQ") ?>">FAQ</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link border px-3 rounded font-weight-bold mr-2 blue-gradient text-white" href="<?php echo linkToApp('event/create') ?>"><i class="fas fa-plus mr-2"></i>Create Your Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border px-3 rounded font-weight-bold mr-2" href="<?php echo linkToApp('') ?>"><i class="fas fa-user mr-2"></i>My Account</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<div style="height: 100px"></div>