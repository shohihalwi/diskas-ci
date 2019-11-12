<div style="height: 150px"></div>
<section class="">
    <div class="container">
        <h2>Semua Event</h2>

        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                        <td><?php echo $value['katagori_id'] ?></td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <a href="<?= base_url('admin/events/detail') ?>" class="btn btn-outline-primary btn-sm shadow-none">Detail</a>
                        </td>
                    </tr>

                    <?php
                }
            ?>

        </table>
    </div>
</section>