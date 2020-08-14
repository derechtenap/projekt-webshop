<?php
if (isset($_POST["submit"])){
    require_once("db_login.inc.php"); 
    $mysqli = login("webshopdb"); 

/**Was hat das Formular gespeichert? Zum Debuggen */
print_r($_POST);

/**Eintragen in Datenbank */
$sql = "INSERT INTO `t_plz` (`PLZ`, `Ort`) VALUES ('".$_POST["PLZ"]."', '".$_POST["Ort"]."'); ";
//$sql .= "INSERT INTO `t_kunden` (`K_Nr`, `Name`, `Vorname`, `Adresse`, `FK_PLZ`) VALUES "; 
//$sql .= "(NULL, '".$_POST["Name"]."', '".$_POST["Vorname"]."', '".$_POST["Adresse"]."', '".$_POST["PLZ"]."'); ";
//$sql .= "INSERT INTO `t_rechnung` (`Re_Nr`, `FK_K_Nr`, `Zahlungsart`, `Versandart`, `Rechnung_Name`, `Rechnung_Vorname`, `Rechnung_Strasse`, `Rechnung_PLZ`) VALUES "; 
//$sql .= "(NULL, '4', 'payment[]', 'shipping[]', '$_POST["Rechnung_Vorname"]', '$_POST["Rechnung_Name"]', '$_POST["Rechnung_Adresse"]', '58840'); ";
//$sql .= "INSERT INTO `t_bestellliste` (`Pos`, `FK_Prod_ID`, `FK_Re_Nr`, `Menge`) VALUES (NULL, '6', '1', '5'); ";

if ($mysqli->query($sql) === TRUE) {
    echo "<br>Eintrag erstellt!";
    } else {
    echo "<br>Fehler!";
    }
}