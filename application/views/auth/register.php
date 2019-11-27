<div class="container" style="padding-top: 100px;">

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h3 class="font-weight-bolder">Buat Akun </h3>
        <hr>

        <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="masukan nama">
        </div>
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="NIM" class="form-control" placeholder="masukan NIM">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="masukan email">
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
        </div>
        <div class="form-group">
            <label>Universitas</label>
            <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
        </div>
        <div class="form-group">
            <label>Fakultas</label>
            <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
        </div>
        <label>Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="" class="form-control" placeholder="Your Password"> 
            </div> 
        <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="" class="form-control" placeholder="Confirm Password"> 
            </div> 


          <button type="button" class="btn btn-primary" href="<?php echo base_url("authentication/daftar") ?>">Simpan Data</button>
                    <a class="btn btn-danger" href="<?php echo base_url("rekomendasi") ?>">Kembali</a>
        </form>
    </div>
</div>
</div>