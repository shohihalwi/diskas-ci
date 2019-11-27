<!-- card -->
<div class="container mt-4" style="padding-top: 32px;">

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 class="font-weight-bolder">Daftar akun mercu event</h3>
            <hr>

            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="email" name="email" class="form-control" placeholder="masukan email">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="telp" class="form-control" placeholder="masukan no. telp">
                </div>
                <div class="form-group">
                    <label>Upload Banner</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <hr>
                <h3 class="font-weight-bolder">Tambah Tiket</h3>
                <div class="row">
                    <div class="col-md-4  text-md-left">
                        <h4>Tipe</h4>
                        <input type="text" name="telp" class="form-control" placeholder="Tipe">
                    </div>
                    <div class="col-md-4 text-md-left">
                        <h4>Harga</h4>
                        <input type="text" name="telp" class="form-control" placeholder="Harga">
                    </div>
                    <div class="col-md-4  text-md-left">
                        <h4>Quantity</h4>
                        <input type="text" name="telp" class="form-control" placeholder="Quantity">
                    </div>
                </div>
                <!-- Default checked -->

                <div class="checkbox">
                    <label><input type="checkbox" value="">Dapat Sertifikat</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Dapat snack</label>
                </div>
                <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Tambah Tipe
                    Tiket</button><br>


                <button type="button" class="btn btn-primary" href="<?= base_url("membership/membership") ?>">Simpan Data</button>
                <a class="btn btn-danger" href="?page=homepage">Kembali</a>
            </form>
        </div>
    </div>
</div>