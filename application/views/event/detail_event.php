<div class="container">
    <div class="card shadow-none border mb-5">
        <div class="row">
            <div class="col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <img class="card-img-top embed-responsive-item"
                         src="<?php echo linkToApp($detail['cover']) ?>" alt="<?php echo $detail['title']; ?>">
                </div>
            </div>
            <aside class="col-sm-12">
                <article class="card-body p-4">
                    <h1 class="title mb-3 g-sans-regular"><?php echo $detail['title']; ?></h1>

                    <div class="mb-3">
                        <span class="badge badge-primary shadow-none"><?php echo $detail['category_name']; ?></span>
                    </div>
                    <hr>

                    <div class="row">
                        <dl class="param param-feature col-6">
                            <dt><i class="fa fa-calendar mr-2"></i> Date</dt>
                            <dd> <?php echo ConvertDateToString($detail['event_date'], 1, 1); ?></dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt><i class="fas fa-clock mr-2"></i>  Time</dt>
                            <dd> <?php echo $detail['starting_time']; ?>-<?php echo $detail['ending_time']; ?></dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt><i class="fas fa-thumbtack mr-2"></i>Venue</dt>
                            <dd>Gedung Tower Lantai 7, Universitas Mercu Buana</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt><i class="fa fa-layer-group mr-2"></i>Organizer</dt>
                            <dd>Fakultas Ilmu Komputer</dd>
                        </dl> <!-- item-property-hor .// -->
                    </div>

                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd>
                            <p><?php echo $detail['description']; ?></p>
                        </dd>
                    </dl>

                    <hr>
                    <?php
                        foreach ($tickets as $value) {
                            ?>
                            <div class="row border no-gutters rounded mb-2">
                                <div class="col-8 p-2">
                                    <h5 class="mb-0"><?= $value['ticket_name'] ?></h5>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="text-right">
                                        <strong>
                                            <?php if ($value['price'] > 0){ ?>
                                                Rp<?= number_format($value['price']) ?>
                                            <?php } ?>

                                        </strong></div>
                                </div>

                                <div class="col-8 p-2">
                                    <div>
                                        <?php if ($value['is_certificate'] == 1){ ?>
                                            <span class="badge badge-light mr-2 shadow-none">+ Serifikat</span>
                                        <?php } ?>

                                        <?php if ($value['is_snack'] == 1){ ?>
                                            <span class="badge badge-light mr-2 shadow-none">+ Snack</span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <?php if ($value['price'] <= 0){ ?>
                                        <a href="<?= linkToApp('checkout/'. $detail['id'] ."/". $value['id']) ?>" class="btn btn-success btn-sm rounded float-right">GRATIS</a>
                                    <?php }else{ ?>
                                        <a href="<?= linkToApp('checkout/'. $detail['id'] ."/". $value['id']) ?>" class="btn btn-primary btn-sm rounded float-right">Beli</a>
                                    <?php }?>
                                </div>
                            </div>

                            <?php
                        }
                    ?>


                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>

</div>