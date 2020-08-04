 <?php 
 /** Erstellt eine Datenbankverbindung mit zentralen 
 * Konfigurationsdaten des DB-Servers. 
 * @param $database die Datenbank 
 * @return mysqli-Objekt der Datenbankverbindung 
 */
 function login($database) { 
     $server = "localhost"; 
     $user = "root"; 
     $password = "";

    $mysqli = new mysqli($server,$user,$password,$database); 
    if ($mysqli->connect_errno) { 
        echo "Keine DB-Verbindung: ({$mysqli->connect_errno}) " 
        . $mysqli->connect_error; 
        exit(); // beendet das Programm 
    }
    $mysqli->set_charset("utf8"); 
    return $mysqli; 
    } 
?>