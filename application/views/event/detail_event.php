<div class="container">
    <div class="card mb-5">
        <div class="row">
            <aside class="col-sm-5">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img src="assets/images/contoh-detail.jpg" class="img-fluid"></a></div>
                    </div> <!-- slider-product.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-4">
                    <h3 class="title mb-3 g-sans-regular"><?php echo $detail['title']; ?></h3>

                    <div class="mb-3">
                        <span class="badge badge-primary shadow-none">Seminar</span>
                        <span class="badge badge-primary shadow-none">Fasilkom</span>
                    </div>

                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd>
                            <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco </p>
                        </dd>
                    </dl>

                    <div class="row">
                        <dl class="param param-feature col-6">
                            <dt>Tanggal</dt>
                            <dd>sabtu, 12 Januari 2019</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt>Waktu</dt>
                            <dd> 08.00-12.00</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt><i class="fas fa-thumbtack"></i>Tempat</dt>
                            <dd>Gedung Tower Lantai 7, Universitas Mercu Buana</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature col-6">
                            <dt><i class="fas fa-thumbtack"></i>Penyelenggara</dt>
                            <dd>Fakultas Ilmu Komputer</dd>
                        </dl> <!-- item-property-hor .// -->
                    </div>



                    <hr>
                    <div class="row border no-gutters rounded mb-2">
                        <div class="col-8 p-2">
                            <h5 class="mb-0">Tiket Gold</h5>
                        </div>
                        <div class="col-4 p-2">
                            <div class="text-right"><strong>Rp 20.000</strong></div>
                        </div>

                        <div class="col-8 p-2">
                            <div><span class="badge badge-light mr-2 shadow-none">+ Serifikat</span><span
                                    class="badge badge-light shadow-none">+ Snack</spa>
                            </div>
                        </div>
                        <div class="col-4 p-2">
                            <a href="?page=checkout" class="btn btn-primary btn-sm rounded float-right">Beli</a>
                        </div>
                    </div>

                    <div class="row border no-gutters rounded mb-2">
                        <div class="col-8 p-2">
                            <h5 class="mb-0">Tiket Silver</h5>
                        </div>
                        <div class="col-4 p-2">
                            <div class="text-right"><strong>Rp 20.000</strong></div>
                        </div>

                        <div class="col-8 p-2">
                            <div><span class="badge badge-light mr-2 shadow-none">+ Serifikat</span><span
                                    class="badge badge-light shadow-none">+ Snack</spa>
                            </div>
                        </div>
                        <div class="col-4 p-2">
                            <a href="#" class="btn btn-primary btn-sm rounded disabled float-right">Habis</a>
                        </div>
                    </div>

                    <div class="row border no-gutters rounded mb-2">
                        <div class="col-8 p-2">
                            <h5 class="mb-0">Tiket Silver</h5>
                        </div>
                        <div class="col-4 p-2">
                            <div class="text-right"><strong>Rp 20.000</strong></div>
                        </div>

                        <div class="col-8 p-2">
                            <div><span class="badge badge-light mr-2 shadow-none">+ Serifikat</span><span
                                    class="badge badge-light shadow-none">+ Snack</spa>
                            </div>
                        </div>
                        <div class="col-4 p-2">
                            <a href="#" class="btn btn-primary btn-sm rounded disabled float-right">Habis</a>
                        </div>
                    </div>
                    <a type="button" class="btn btn-primary" href="<?= base_url("Authentication/daftar") ?>">daftar</a>
                    <a class="btn btn-danger" href="<?php echo base_url("/") ?>">Kembali</a>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>

</div>