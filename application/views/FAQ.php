<div class="container py-5">
    <h3><?php echo $title ?></h3>
    <p><?php echo $deskripsi ?></p>
    <!-- ini tag debug database <?php print_r($faq) ?> -->
    <div class="accordion" id="accordionExample">

        <?php
        foreach ($master_faqs as $value) {
            $urutan = 1;


            ?>

        <div class="card mb-4">
            <div class="card-header" id="heading-<?php echo $urutan ?>">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#collapse-<?php echo $urutan ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php echo $value['question'];
                                ?>
                    </button>
                </h2>
            </div>

            <div id="collapse-<?php echo $urutan ?>" class="collapse show"
                aria-labelledby="heading-<?php echo $urutan ?>" data-parent="#accordionExample">
                <div class="card-body">
                    <?php echo $value['answer'];
                            ?>
                </div>
            </div>
        </div>

        <?php
            $urutan++;
        }
        ?>



    </div>
</div>