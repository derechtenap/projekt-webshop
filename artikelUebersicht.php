<?php
require_once("db_login.inc.php"); 
$mysqli = login("webshopdb"); 

/*
$sql = "SELECT Produkt_Name, Nettopreis
FROM t_produkte WHERE Produkt_Name = artikel_Tomaten";
*/

$sql = "SELECT Produkt_Name, Nettopreis FROM t_produkte WHERE Produkt_Name LIKE '?%'";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($productname, $nettoPreis);
$stmt->fetch();
$stmt->close();

echo json_encode($nettoPreis) ;