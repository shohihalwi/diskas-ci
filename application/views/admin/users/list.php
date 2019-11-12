<section class="">
    <div class="container">
        <h2>Semua Pengguna</h2>

        <table id="dt" class="table table-hover table-bordered bg-white" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nama Pengguna
                </th>
                <th class="th-sm">Jurusan
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm">NIM
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($users as $value){
                ?>

                <tr>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['jurusan_id'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['nim'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/events/detail/'.$value['user_id']) ?>" class="btn btn-outline-primary btn-sm shadow-none">Detail</a>
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
    </div>
</section>