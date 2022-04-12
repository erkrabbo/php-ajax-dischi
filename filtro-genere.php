<?php
    include __DIR__.'/DB/dischi.php';

    $dischi_filtrati = [];
    $genere_selezionato = $_GET['genere'];

    foreach ($arr_dischi as $disco) {
        if($disco['genre'] == $genere_selezionato) {
            $dischi_filtrati[] = $disco;
        }
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dischi_filtrati);