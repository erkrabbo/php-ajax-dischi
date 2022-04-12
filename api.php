<?php
    include __DIR__.'/DB/dischi.php';

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($arr_dischi);