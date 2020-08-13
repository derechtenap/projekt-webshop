<?php
require_once("db_login.inc.php"); 
$mysqli = login("webshop"); 

$sql = "SELECT Produkt_Name, Nettopreis
FROM t_produkte WHERE Produkt_Name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($produktname, $nettoPreis);
$stmt->fetch();
$stmt->close();

echo $nettoPreis;