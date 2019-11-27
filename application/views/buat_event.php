<!-- card -->
<div class="container mt-4">

    <h3 class="font-weight-bolder">Posting Event</h3>
    <p>Kamu bisa posting Event kamu dengan mudah disini</p>

    <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="card mb-3 mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Infomasi Dasar</h5>
                        <p>Masukan informasi event dasar yang akan kamu buat</p>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>Nama Event</label>
                            <input type="text" name="nama" class="form-control"
                                placeholder="Contoh seminar nasional sinaptika">
                        </div>
                        <div class="form-group">
                            <label>Pilih Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">Seminar</option>
                                <option value="">Pelatihan</option>
                                <option value="">Pensi</option>
                                <option value="">Pameran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                rows="3"></textarea>
                            <small id="waktu" class="text-muted">Ceritakan detail event kamu selengkap mungkin</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Keteranan Event</h5>
                        <p>Masukan informasi event dasar yang akan kamu buat</p>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="waktu">Waktu Event</label>
                            <input type="date" name="waktu" id="waktu" class="form-control" placeholder="asd"
                                aria-describedby="waktu">
                            <small id="waktu" class="text-muted">Masukan waktu event</small>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Kategori Tiket</h5>
                        <p>Buat tiket event kamu sesuai tipe yang diinginkan</p>
                    </div>
                    <div class="col-md-9">
                        <div>
                            <div class="form-group">
                                <label for="kategori_tiket">Kategori Tiket</label>
                                <input type="text" name="kategori_tiket" id="kategori_tiket" class="form-control"
                                    placeholder="" aria-describedby="kategori_tiket">
                                <small id="kategori_tiket" class="text-muted">Kategori tiket seperti Silver, Gold,
                                    Premium</small>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" name="harga" id="harga" class="form-control"
                                            placeholder="23000" aria-describedby="harga">
                                        <small id="harga" class="text-muted">Masukan harga tanpa koma dan titik</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kuota">Kuota</label>
                                        <input type="number" name="kuota" id="kuota" class="form-control"
                                            placeholder="100" aria-describedby="kuota">
                                        <small id="kuota" class="text-muted">kuota tiket yang dijual</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="float-right">
                    <a class="btn btn-danger" href="<?php echo base_url("/") ?>">Kembali</a>
                    <a href="<?php echo base_url("membership") ?>" class="btn btn-primary">Simpan Data</a>
                </div>
            </div>
        </div>


    </form>
</div>