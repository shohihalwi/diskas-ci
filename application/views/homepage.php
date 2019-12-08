<!-- banner hero -->
<section id="home-banner-box" class="home-banner loading black d-none">
    <div class="container">
        <div class="image video-slide">
            <div class="video-background">
                <div class="overlay-video"></div>
                <div class="video-foreground" id="YouTubeBackgroundVideoPlayer">
                </div>
            </div>
        </div>
    </div>
</section>

<!--<script async src="https://www.youtube.com/iframe_api"></script>-->
<!--<script async src="--><?//= base_url() ?><!--assets/js/video.js"></script>-->

<section class="d-flex flex-row" style="padding-top: 100px">
    <div class="container align-self-center">
        <h1 class="g-sans-regular display-4">Looking for something for increasing <br> your knowledge like Certification?

        </h1>
        <h1 class="typing g-sans-regular d-none">
            <span class="typing-item d-block"><span class="typing-item_inner">Certification </span></span>
            <span class="typing-item d-block"><span class="typing-item_inner">Public Lecture </span></span>
            <span class="typing-item d-block"><span class="typing-item_inner">Exhibition </span></span>
        </h1>

        <p class="heading h3-responsive mt-5">Search and get events that interest you easily</p>
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <!-- Large background input -->
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control form-control-lg search-slt" placeholder="e.g Seminar Sinaptika">
                </div>
                <div class="col-md-2 p-0">
                    <button type="submit" class="btn btn-primary btn-block m-0">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>


<!-- card Cetagory -->

<section class="py-5 d-none">
    <div class="container text-center">
        <h1 class="h1-responsive g-sans-regular my-3">Semua event Universitas Mercu Buana</h1>
        <p class="lead">It's now easier to find events that are suitable for you to complete your knowledge, network and certificates</p>
    </div>

    <div class="container">
        <div class="grid">
            <div class="row">
                <div class="col">
                    <figure class="effect-ravi">
                        <img src="assets/images/pelatihan.jpg" alt="assets/images/pelatihan.jpg" />
                        <figcaption>
                            <h2>PELATIHAN <span>KAMPUS</span></h2>
                            <p>
                                <a href="#"><i class="fa fa-search"></i></a>

                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col">
                    <figure class="effect-ravi">
                        <img src="assets/images/seminar.jpg" alt="img25" />
                        <figcaption>
                            <h2>SEMINAR <br><span>KAMPUS</span></h2>
                            <p>
                                <a href="#"><i class="fa fa-search"></i></a>

                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <figure class="effect-ravi">
                        <img src="assets/images/1006-2000x300.jpg" alt="img25" />
                        <figcaption>
                            <h2>EVENT <span>KAMPUS</span></h2>
                            <p>
                                <a href="#"><i class="fa fa-search"></i></a>

                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- card Category -->

<section class="py-5">
    <div class="container my-3">
        <h3 class="h1-responsive g-sans-regular"><?php echo $title ?></h3>
        <p><?php echo $deskripsi ?><span class="float-right">
                <a href="<?= base_url('event/all-events')?>" class="text-uppercase">Lihat
                    Semua</a></span></p>
        <div class="carousel owl-carousel owl-theme">

            <?php

            foreach ($events as $value) {
                $urutan = 1;
                ?>
                <div class="card m-1">
                    <!-- Card image -->
                    <div class="view overlay">
                        <div class="embed-responsive embed-responsive-4by3">
                            <img class="card-img-top embed-responsive-item"
                                 src="http://app.eventmercubuana.test/<?php echo $value['cover']; ?>" alt="<?php echo $value['title']; ?>">
                        </div>
                        <div class="display-price"><span class="badge badge-success"><i
                                        class="material-icons md-18">confirmation_number</i> FREE</span></div>
                        <a href="<?php echo base_url('event/' . $value['id'] .'/' .  slug($value['title'])); ?>">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h5 class="card-title text-truncate-2">
                            <a href="<?php echo base_url('event/' . $value['id'] .'/' .  slug($value['title'])); ?>"
                                                                  class="text-reset"><?php echo $value['title']; ?></a></h5>
                        <!-- Text -->
                        <hr>
                        <p class="card-text text-truncate mb-0"><i class="material-icons md-green md-18 mr-1">schedule</i>
                            <?php echo ConvertDateToString($value['event_date'], 1, 1); ?>
                        </p>
                        <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i> <?php echo $value['place']; ?>
                        </p>

                        <p class="card-text text-truncate">
                            <span class="badge badge-pill badge-light shadow-none p-2"><?php echo $value['name']; ?></span>
                        </p>
                    </div>
                </div>
            <?php
                $urutan++;
            }

            ?>

        </div>

    </div>
</section>




<!-- Call to panitia -->
<section class="py-5 mb-4">
    <div class="container">
        <div class="card blue-gradient">
            <div class="card-body white-text">
                <div class="row p-3">
                    <div class="col-md-8">
                        <h4 class="g-sans-regular">Post events and manage without fuss</h4>
                        <p class="mb-0">You can post your event or your organization and manage participants easily</p>
                    </div>
                    <div class="col-md-4 d-flex flex-column">
                        <a href="<?php echo linkToApp('event/create') ?>" class="bg-white text-dark btn btn-fb btn-login waves-effect waves-light">Try for Free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Terbaru Santai sejenak, lengkapi sertifikatmu dengan pilih event yang kamu suka-->

<section class="py-5">
    <div class="container">
        <h3 class="h1-responsive g-sans-regular">New one we have</h3>
        <p>Make sure you are up to date on your campus events<span class="float-right"><a href="#" class="text-uppercase">Lihat Semua</a></span>
        </p>
        <div class="carousel owl-carousel owl-theme">

            <?php

            foreach ($new as $value) {
                $urutan = 1;
                ?>

                <div class="card m-1">
                    <!-- Card image -->
                    <div class="view overlay">
                        <div class="embed-responsive embed-responsive-4by3">
                            <img class="card-img-top embed-responsive-item"
                                 src="http://app.eventmercubuana.test/<?php echo $value['cover']; ?>" alt="<?php echo $value['title']; ?>">
                        </div>
                        <div class="display-price"><span class="badge badge-success"><i
                                        class="material-icons md-18">confirmation_number</i> FREE</span></div>
                        <a href="<?php echo $value['title']; ?>">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h5 class="card-title text-truncate-2"><a href="<?= base_url("event/detail/" . $value['id']) ?>"
                                                                  class="text-reset"><?php echo $value['title']; ?></a></h5>
                        <!-- Text -->
                        <hr>
                        <p class="card-text text-truncate mb-0"><i class="material-icons md-green md-18 mr-1">schedule</i>
                            <?php echo ConvertDateToString($value['event_date'], 1, 1); ?>
                        </p>
                        <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i> <?php echo $value['place']; ?>
                        </p>

                        <p class="card-text text-truncate">
                            <span class="badge badge-pill badge-light shadow-none p-2"><?php echo $value['name']; ?></span>
                        </p>
                    </div>
                </div>

            <?php
                $urutan++;
            }

            ?>

        </div>
    </div>
</section>


<!-- Section: Features v.1 -->
<section class="text-center py-5 bg-light d-none">
    <div class="container">
        <!-- Section heading -->
        <h2 class="h1-responsive g-sans-regular my-5">Bagaimana Mercu Event Bekerja?</h2>
        <!-- Section description -->
        <p class="lead w-responsive mx-auto mb-5">Mercu Event adalah website layanan reservasi tiket event yang ada di
            universitas Mercu Buana. Layanan ini memungkinkan penyelenggara event untuk posting dan mengelola reservasi
            peserta serta memudahkan peserta untuk mendapatkan informasi dan mengekuti event</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="fas fa-chart-area fa-3x red-text"></i>
                <h5 class="font-weight-bold my-4">Reservasi Mudah</h5>
                <p class="mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Reprehenderit
                    maiores aperiam minima assumenda deleniti hic.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="fas fa-book fa-3x cyan-text"></i>
                <h5 class="font-weight-bold my-4">Pembayaran Aman</h5>
                <p class="mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Reprehenderit
                    maiores aperiam minima assumenda deleniti hic.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="far fa-comments fa-3x orange-text"></i>
                <h5 class="font-weight-bold my-4">Sertifikat Digital</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores
                    aperiam minima assumenda deleniti hic.
                </p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
    </div>

</section>
<!-- Section: Features v.1 -->