<section class="">
    <div class="container-fluid">


        <table id="dt" class="table table-hover table-bordered bg-white" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nama Kategori
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($kategori as $value){
                ?>

                <tr>
                    <td><?php echo $value['nama_kategori'] ?></td>
                    <td>
                        <a href="<?= base_url('/masterdata/kategori/'.$value['kategori_id']) ?>" class="btn btn-default btn-sm shadow-none float-right">Edit</a>

                        <a href="<?= base_url('/masterdata/kategori/'.$value['kategori_id']) ?>" class="btn btn-danger btn-sm shadow-none float-right mr-2">Hapus</a>
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
    </div>
</section>