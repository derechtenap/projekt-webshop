<?php
require_once("db_login.inc.php"); 
$mysqli = login("webshop"); 

$array = [];
    

        $result = $mysqli->query("SELECT Produkt_Name, Nettopreis FROM t_produkte WHERE Produkt_Name LIKE ''");
        while ($adresse = $result->fetch_assoc()) {
            $array[] = $adresse;
        }

        echo json_encode($array);


?>