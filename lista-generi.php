<?php
    include __DIR__.'/DB/dischi.php';

    $generi = [];

    foreach($arr_dischi as $disco){
        if(!in_array($disco['genre'], $generi)){
            $generi[] = $disco['genre'];
        }
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($generi);