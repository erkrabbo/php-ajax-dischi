<?php
    include __DIR__.'/DB/dischi.php';
?>

<main class="py-3">
        <div class="container">
            <div class="row row-cols-5 gy-2 gx-4">
                <?php foreach($arr_dischi as $disco) {?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <img src="<?= $disco["poster"]?>" alt="<?= $disco["title"]?>" class="card-img-top">
                                <div class="card-text">
                                    <h2 class="card-title"><?= $disco["title"]?></h2>
                                    <p><?= $disco["title"]?></p>
                                    <p><?= $disco["year"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php };?>
            </div>
        </div>
    </main>