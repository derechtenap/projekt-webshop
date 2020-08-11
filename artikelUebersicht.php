<?php
$mysqli = new mysqli("servername", "username", "password", "dbname");
if($mysqli->connect_error) {
  exit('Could not connect');
}

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