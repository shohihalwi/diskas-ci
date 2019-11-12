<section class="">
    <div class="container">
        <h2>Semua Event</h2>

        <table id="dt" class="table table-hover table-bordered bg-white" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nama Event
                </th>
                <th class="th-sm">Kategori
                </th>
                <th class="th-sm">Tanggal Event
                </th>
                <th class="th-sm">Diselenggarakan Oleh
                </th>
                <th class="th-sm">Lokasi
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
            </thead>
            <tbody>

            <?php
                foreach ($events as $value){
                    ?>

                    <tr>
                        <td><?php echo $value['nama_event'] ?></td>
                        <td><?php echo $value['kategori_id'] ?></td>
                        <td><?php echo $value['tanggal'] ?></td>
                        <td><?php echo $value['diselenggarakan_oleh'] ?></td>
                        <td><?php echo $value['lokasi'] ?></td>
                        <td>
                            <a href="<?= base_url('admin/events/detail/'.$value['event_id']) ?>" class="btn btn-outline-primary btn-sm shadow-none">Detail</a>
                        </td>
                    </tr>

                    <?php
                }
            ?>

        </table>
    </div>
</section>