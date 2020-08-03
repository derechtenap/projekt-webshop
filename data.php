<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database ="webshopdb";

    //Verbindung zu DB aufbauen
    $conn = mysqli_connect($server, $user, $password, $database);

    //Tabelle Prosukte auslesen
    $result = mysqli_query($conn, "SELECT * from t_produkte");

    //In Array speichern
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    //In JSON-Objekt zurückgeben
    echo json_encode($data);
?>