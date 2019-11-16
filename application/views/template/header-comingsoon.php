<nav class="navbar navbar-expand navbar-light white w-100 border-bottom navbar-scrollable">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/images/eventmercubuana-logo.svg') ?>" alt="logo mercubuana" style="height: 38px; margin-right: 8px">
            <span class="g-sans-regular">Mercubuana Events</span>
        </a>
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"-->
<!--                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <ul class="navbar-nav loggedSessions" style="display: none;">

                        <li class="nav-item d-none d-sm-block">
                            <a href="#" class="nav-link">Hi, <strong><span class="loggedUserName"></span></strong></a>
                        </li>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link p-0 dropdown" href="#" id="avatar-dropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img class="loggedUserImage" class="rounded-circle z-depth-0"
                                     height="35">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="avatar-dropdown">
                                <a class="dropdown-item" href="#" onclick="signOut();">Sign Out</a>
                            </div>
                        </li>

            </ul>
        </div>
    </div>
</nav>