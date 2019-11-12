<!-- banner hero -->
<section id="home-banner-box" class="home-banner loading black">
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

<script async src="https://www.youtube.com/iframe_api"></script>
<script async src="<?= base_url() ?>assets/js/video.js"></script>



<!-- Search form -->
<section class="search-sec black">
    <div class="container pt-3 pb-4">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <input type="text" class="form-control form-control-lg search-slt" placeholder="Pencarian">
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-control form-control-lg search-slt" id="exampleFormControlSelect1">
                        <option>kategori</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                    </select>
                </div>
                <div class="col-sm-3 mb-3">
                    <select class="form-control form-control-lg search-slt" id="exampleFormControlSelect2">
                        <option>fakultas</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary btn-block m-0">cari</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- card Cetagory -->

<section class="py-5">
    <div class="container text-center">
        <h1 class="h1-responsive g-sans-regular my-5">Semua event Universitas Mercu Buana</h1>
        <p class="lead">Kini lebih mudah menemukan event yang cocok buat kamu untuk melengkapi pengetahuan, jaringan dan
            sertifikat kamu</p>
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
        <h3 class="h1-responsive g-sans-regular">Hi, jangan terlewat event Fasilkom</h3>
        <p>Pilih event rekomendasi yang mungkin kamu minati<span class="float-right"><a href="?page=all-event"
                    class="text-uppercase">Lihat Semua</a></span></p>
        <div class="carousel owl-carousel owl-theme">
            <div class="card m-1">
                <!-- Card image -->
                <div class="view overlay">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img class="card-img-top embed-responsive-item" src="assets/images/poto-card/musikologi.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="display-price"><span class="badge badge-success"><i
                                class="material-icons md-18">confirmation_number</i> FREE</span></div>
                    <a href="<?= base_url("event/detail/moonzher") ?>">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title text-truncate-2"><a href="?page=detail" class="text-reset">Musikologi Masa
                            Kini
                            membawakan menawan</a></h5>
                    <!-- Text -->
                    <hr>
                    <p class="card-text text-truncate mb-0"><i class="material-icons md-green md-18 mr-1">schedule</i>
                        Sabtu,
                        24 Nov 2019
                    </p>
                    <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i> Gedung
                        Rektorat Lantai 3, Mercu Buana Meruya
                    </p>

                    <p class="card-text text-truncate">
                        <span class="badge badge-pill badge-light shadow-none p-2">Seminar</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Fasilkom</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>




<!-- Call to panitia -->
<section class="elegant-color-primary py-5 mb-4 black">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="h1-responsive text-white g-sans-reguler">Posting event dan kelola tanpa ribet</h1>
                <p class="font-weight-light text-white">Kamu bisa posting event kamu atau organisasimu dan kelola
                    peserta dengan mudah</p>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url("event/buat_event") ?>" class="btn btn-primary btn-block">Buat Event</a>
            </div>
        </div>
    </div>
</section>

<!-- Event Terbaru -->

<section class="py-5">
    <div class="container">
        <h3 class="h1-responsive g-sans-regular">Event Terbaru</h3>
        <p>Santai sejenak, lengkapi sertifikatmu dengan pilih event yang kamu suka<span class="float-right"><a href="#"
                    class="text-uppercase">Lihat Semua</a></span></p>
        <div class="carousel owl-carousel owl-theme">
            <div class="card m-1">
                <!-- Card image -->
                <div class="view overlay">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img class="card-img-top embed-responsive-item" src="assets/images/cravier.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="display-price"><span class="badge badge-success"><i
                                class="material-icons md-18">confirmation_number</i> FREE</span></div>
                    <a href="?page=detail">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title text-truncate-2"><a href="?page=detail" class="text-reset">Musikologi Masa
                            Kini
                            membawakan menawan</a></h5>
                    <!-- Text -->
                    <hr>
                    <p class="card-text text-truncate mb-0"><i class="material-icons md-green md-18 mr-1">schedule</i>
                        Sabtu,
                        24 Nov 2019
                    </p>
                    <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i> Gedung
                        Rektorat Lantai 3, Mercu Buana Meruya
                    </p>

                    <p class="card-text text-truncate">
                        <span class="badge badge-pill badge-light shadow-none p-2">Seminar</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Fasilkom</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Banyak Peminat -->

<section class="py-5">
    <div class="container">
        <h3 class="h1-responsive g-sans-regular">Banyak Peminat</h3>
        <p>Jangan sampai kalah berebutan tiket dengan mahasiswa lain<span class="float-right"><a href="#"
                    class="text-uppercase">Lihat Semua</a></span></p>
        <div class="carousel owl-carousel owl-theme">
            <div class="card m-1">
                <!-- Card image -->
                <div class="view overlay">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img class="card-img-top embed-responsive-item" src="assets/images/indonesia-colorrun.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="display-price"><span class="badge badge-light"><i
                                class="material-icons md-18">confirmation_number</i> HABIS</span></div>
                    <a href="?page=detail">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title text-truncate-2"><a href="?page=indonesia-colorrun"
                            class="text-reset">Musikologi Masa Kini
                            membawakan menawan</a></h5>
                    <!-- Text -->
                    <hr>
                    <p class="card-text text-truncate mb-0"><i class="material-icons md-green md-18 mr-1">schedule</i>
                        Sabtu,
                        24 Nov 2019
                    </p>
                    <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i> Gedung
                        Rektorat Lantai 3, Mercu Buana Meruya
                    </p>

                    <p class="card-text text-truncate">
                        <span class="badge badge-pill badge-light shadow-none p-2">Seminar</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Fasilkom</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                        <span class="badge badge-pill badge-light shadow-none p-2">Sertifikat</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section: Features v.1 -->
<section class="text-center py-5 bg-light">
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
