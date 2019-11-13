<section class="">
    <div class="container">
        <div class="card shadow-none">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" class="form-control" id="name" value="<?= isset($kategori['nama_kategori']) ? $kategori['nama_kategori'] : "" ?>" name="nama_kategori">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>