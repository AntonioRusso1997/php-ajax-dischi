<?php

    //Raccogliere i dati da inviare
    require __DIR__ . '/../partials/database.php';

    //Impostare la risposta con protocollo json
    header('Content-Type: application/json');

    //Inviare la risposta
    echo json_encode($db);

?>