<section class="d-flex flex-row" style="padding-top: 100px">
    <div class="container align-self-center">

        <p class="heading h3-responsive mt-5">Search and get events that interest you easily</p>
        <form action="<?= base_url('search') ?>" method="get" novalidate="novalidate" class="need-validate">
            <div class="row">
                <!-- Large background input -->
                <div class="col-md-6 mb-3">
                    <input type="text" name="keyword" class="form-control form-control-lg search-slt required-field"
                           placeholder="e.g Seminar Sinaptika">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block m-0">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="py-5">
    <div class="container my-3">
        <p>Search for <strong><?= $keyword ?></strong></p>
        <div class="row">

            <?php
            if ($events) {
                foreach ($events as $value) {

                    ?>
                    <div class="col-md-3">
                        <div class="card m-1">
                            <!-- Card image -->
                            <div class="view overlay">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <img class="card-img-top embed-responsive-item"
                                         src="<?php echo linkToAppAsset($value['cover']); ?>"
                                         alt="<?php echo $value['title']; ?>">
                                </div>
                                <div class="display-price"><span class="badge badge-success"><i
                                                class="material-icons md-18">confirmation_number</i> FREE</span></div>
                                <a href="<?php echo base_url('event/' . $value['id'] . '/' . slug($value['title'])); ?>">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h5 class="card-title text-truncate-2">
                                    <a href="<?php echo base_url('event/' . $value['id'] . '/' . slug($value['title'])); ?>"
                                       class="text-reset"><?php echo $value['title']; ?></a></h5>
                                <!-- Text -->
                                <hr>
                                <p class="card-text text-truncate mb-0"><i
                                            class="material-icons md-green md-18 mr-1">schedule</i>
                                    <?php echo ConvertDateToString($value['event_date'], 1, 1); ?>
                                </p>
                                <p class="card-text text-truncate"><i class="material-icons md-green md-18 mr-1">map</i>
                                    <?php echo $value['place']; ?>
                                </p>

                                <p class="card-text text-truncate">
                            <span
                                    class="badge badge-pill badge-light shadow-none p-2"><?php echo $value['name']; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }else{ ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        Sorry, event with keyword <strong><?= $keyword ?></strong> not found.
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
</section>