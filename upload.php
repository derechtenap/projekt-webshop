    <!-- FORMULAR CONTAINER -->

    <div class="container my-5">
        <form id="bestellung" action="upload.php" method="POST">

            <div class="row" id="userInput">

                <div class="col-xs-12 col-md-6 p-3 border-bottom">
                    <h1 class="h3 mb-5 text-uppercase">Lieferanschrift</h1>
                    <div class="input-group mb-3">
                        <span class="input-group-text rounded-0">Name</span>
                        <input type="text" id="accVorname" name="Vorname" aria-label="Vorname" placeholder="Max" required autofocus class="form-control rounded-0">
                        <input type="text" id="accNachname" name="Name" aria-label="Nachname" placeholder="Mustermann" required class="form-control rounded-0">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text rounded-0">Straße</span>
                        <input type="text" id="accStraße" name="Adresse" aria-label="Straße" placeholder="Musterweg 96a" required class="form-control rounded-0">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text rounded-0">Ort</span>
                        <input type="number" id="accPlz" name="PLZ" aria-label="PLZ" placeholder="12345" required class="form-control rounded-0 input-number-arrows-none">
                        <input type="text" id="accOrt" name="Ort" aria-label="Ort" placeholder="Musterdorf" required class="form-control rounded-0">
                    </div>

                    <h2 class="h3 my-5 text-uppercase">Zahlungart</h2>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment[]" id="payment" value="Lastschrift">
                        <label class="form-check-label" for="inlineRadio1">Lastschrift</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment[]" id="payment" value="Paypal">
                        <label class="form-check-label" for="inlineRadio2">Paypal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment[]" id="payment" value="Kreditkarte">
                        <label class="form-check-label" for="inlineRadio3">Kreditkarte</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment[]" id="payment" value="Rechnung">
                        <label class="form-check-label" for="inlineRadio4">Rechnung</label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 p-3 border-bottom">
                    <h1 class="h3 mb-5 text-uppercase">Rechnungsanschrift</h1>
                    <div class="input-group mb-3">
                        <span class="input-group-text rounded-0">Name</span>
                        <input type="text" id="invoiceVorname" name="Rechnung_Vorname" aria-label="Vorname" placeholder="Max" required class="form-control rounded-0">
                        <input type="text" id="invoiceNachname" name="Rechnung_Name" aria-label="Nachname" placeholder="Mustermann" required class="form-control rounded-0">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text rounded-0">Straße</span>
                        <input type="text" id="invoiceStraße" name="Rechnung_Strasse" aria-label="Straße" placeholder="Musterweg 96a" required class="form-control rounded-0">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text rounded-0">Ort</span>
                        <input type="number" id="invoicePlz" name="Rechnung_PLZ" aria-label="PLZ" placeholder="12345" required class="form-control rounded-0 input-number-arrows-none">
                        <input type="text" id="invoiceOrt" name="Rechnung_Ort" aria-label="Ort" placeholder="Musterdorf" required class="form-control rounded-0">
                    </div>

                    <h2 class="h3 my-5 text-uppercase">Versandart</h2>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="shipping" name="shipping[]" value="DHL">
                        <label class="form-check-label" for="inlineRadio5">DHL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="shipping" name="shipping[]" value="DHL Express">
                        <label class="form-check-label" for="inlineRadio6">DHL Express</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="shipping" name="shipping[]" value="Hermes">
                        <label class="form-check-label" for="inlineRadio7">Hermes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="shipping" name="shipping[]" value="Hermes Fast">
                        <label class="form-check-label" for="inlineRadio8">Hermes Fast</label>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-3 rounded-0" id="backToChart" onclick="location.href='./warenkorb/inhalt.html'"> Zurück zum Warenkorb</button>
                <input class="btn btn-primary mt-3 rounded-0 float-right" type="submit" name="btn" value="Weiter">

            </div>

        </form>
    </div>

    <div id="userOutput" style="display: none;">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 p-3" id="accountDaten"></div>
                <div class="col-xs-12 col-md-6 p-3" id="invoiceDaten"></div>
            </div>
            <div class="w-100 mt-3 mb-5 p-3 border rounded-0" id="artikel"></div>
            <div class="w-100 mt-3 mb-5">
                <button class="btn btn-outline-primary rounded-0" id="back">Zurück</button>
                <button type="submit" class="btn btn-primary rounded-0 float-right" id="bestellenBtn">Jetzt Zahlungspflichtig bestellen!</button>
            </div>

        </div>
    </div>

<?php
if (isset($_POST["btn"])){
    require_once("db_login.inc.php"); 
    $mysqli = login("webshopdb"); 

/**Was hat das Formular gespeichert? Zum Debuggen */
print_r($_POST);

/**Eintragen in Datenbank 
//$sql = "INSERT INTO `t_plz` (`PLZ`, `Ort`) VALUES ('".$_POST["PLZ"]."', '".$_POST["Ort"]."'); ";
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
    */
}