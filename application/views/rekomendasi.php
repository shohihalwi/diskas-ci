<section class="py-5">
    <div class="container my-3">
        <h3 class="h1-responsive g-sans-regular">Rekomendasi Untukmu</h3>
        <p>Pilih event kampus yang mungkin kamu minati</p>
        <div class="carousel owl-carousel owl-theme">
            <div class="card m-1">

                <?php
                foreach ($events as $value) {
                    $urutan = 1;

                    ?>
                <!-- Card image -->
                <div class="view overlay">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img class="card-img-top embed-responsive-item"
                            src="<?= base_url() ?>assets/images/poto-card/<?php echo $value['cover']; ?>"
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
                    <h5 class="card-title text-truncate-2"><a href="<?= base_url("event/detail/" . $value['id']) ?>"
                            class="text-reset"><?php echo $value['title']; ?></a></h5>
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
            <?php
            $urutan++;
        }
        ?>
        </div>

    </div>
</section>