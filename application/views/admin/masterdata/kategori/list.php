<section class="">
    <div class="container-fluid">
        <table id="dt" class="table table-hover table-bordered bg-white" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nama Kategori</th>
                <th class="th-sm">Dibuat</th>
                <th class="th-sm">Terakhir diubah</th>
                <th class="th-sm">Action</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($kategori as $value){
                ?>
                <tr>
                    <td><?php echo $value['nama_kategori'] ?></td>
                    <td><?php echo human_diff($value['created_at']) ?></td>
                    <td><?php echo human_diff($value['updated_at']) ?></td>
                    <td>
                        <a href="#"
                           class="btn btn-danger btn-sm shadow-none float-right ml-2"  data-title="<?php echo $value['nama_kategori'] ?>"
                           data-title="<?php echo $value['nama_kategori'] ?>"
                           data-link="<?= base_url(PATH_ADMIN . '/masterdata/kategori/delete/'.$value['kategori_id']) ?>"
                           data-toggle="modal"
                           data-target="#confirmationDelete">Hapus</a>
                        <a href="<?= base_url(PATH_ADMIN . '/masterdata/kategori/edit/'.$value['kategori_id']) ?>" class="btn btn-default btn-sm shadow-none float-right">Edit</a>
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="confirmationDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Anda yakin akan menghapus <span id="confirmationTitle"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Batal</button>
                <a href="" id="confirmationLink" type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
            </div>
        </div>
    </div>
</div>
