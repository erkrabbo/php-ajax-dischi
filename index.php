<?php
    include __DIR__.'/DB/dischi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
</body>
</html>