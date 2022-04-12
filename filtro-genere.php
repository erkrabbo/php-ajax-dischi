<?php
    header('Content-Type: application/json; charset=utf-8');
    include __DIR__.'/DB/dischi.php';

    $dischi_filtrati = [];
    $genere_selezionato = $_GET['genere'];

    if($genere_selezionato != ''){
        foreach ($arr_dischi as $disco) {
            if($disco['genre'] == $genere_selezionato) {
                $dischi_filtrati[] = $disco;
            }
        }
    
        echo json_encode($dischi_filtrati);
    } else {
        echo json_encode($arr_dischi);
    }