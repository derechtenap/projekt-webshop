<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bestellinformation &ndash; neXtLVL Webshop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/next.min.css">
</head>

<body>

    <!-- TOP LEVEL NAV -->
    <nav class="nav border-bottom small justify-content-end">

        <a href="profil/nutzer.html" class="nav-link link-secondary" data-action="profil">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </a>

        <a href="warenkorb/inhalt.html" class="nav-link link-secondary" data-action="warenkorb">

            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket3-fill icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 0 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z" />
                <path d="M13.489 14.605A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395L1.311 9H14.69l-1.201 5.605z" />
                <rect width="16" height="2" y="6" rx=".5" />
            </svg>
        </a>
        <a href="hilfe/ueber-uns.html" class="nav-link link-secondary">Über uns</a>
        <a href="hilfe/uebersicht.html" class="nav-link link-secondary">Hilfe</a>
    </nav>
    <!-- /TOP LEVEL NAV -->
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
        <div class="container">
            <a class="navbar-brand border rounded px-3" href="index.html">neXtLVL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Produkte
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="produkte.php">Alle Produkte</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="produkte.php#obst">Obst</a></li>
                            <li><a class="dropdown-item" href="produkte.php#gemuese">Gemüse</a></li>
                            <li><a class="dropdown-item" href="produkte.php#fruechte">Früchte</a></li>
                            <li><a class="dropdown-item" href="produkte.php#exotisch">Exotisch</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="produkte/neuheiten.html">Neuheiten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produkte/sale.html">SALE <sup><span class="badge bg-danger align-text-top" title="3 Produkte befindet sich im Sale!">3</span></sup></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input type="text" class="form-control form-text-success form-border-next-green" placeholder="Wonach suchen Sie?" aria-label="Wonach suchen Sie?" aria-describedby="basic-addon2">
                    <span class="btn-group-vertical ml-2" id="basic-addon2">
                        <button type="button" class="btn btn-sm">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search icon-unset" style="color: 6ab04c;" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </nav>
    <!-- /NAV -->

    <!-- FORMULAR CONTAINER -->

    <div class="container my-5">
        <form id="bestellung" action="bestellUebersicht.php" method="POST">

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

   
    <!-- FOOTER -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <section class="container text-center text-md-left">
                <div class="row">
                    <hr class="clearfix w-100 d-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase"><a href="index.html" class="text-white text-decoration-none">neXtLVL Goods</a></h5>
                        <ul class="list-unstyled">
                            <li class="small pt-3 text-light w-75">
                                neXtLVL Goods ist deine Quelle für ausgezeichnete Früche und Gemüse. Hol dir jetzt deine Portion Vitamine!
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="produkte.php">
                            <h5 class="text-uppercase">Produkte</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="text-white text-decoration-none" href="produkte.php#obst">Obst</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte.php#gemuese">Gemüse</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte.php#fruechte">Früchte</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte.php#exotisch">Exotisch</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="produkte/neuheiten.html">
                            <h5 class="text-uppercase">Neuheiten</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="text-white text-decoration-none" href="produkte/sale.html">Sale</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="kontakt/formular.html">
                            <h5 class="text-uppercase footer-link">Kontakt</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="text-white text-decoration-none" href="hilfe/ueber-uns.html">Über uns</a></li>
                            <li><a class="text-white text-decoration-none" href="hilfe/uebersicht.html">Hilfe</a></li>
                            <li><a class="text-white text-decoration-none" href="kontakt/impressum.html">Impressum</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="text-center py-3 mt-3 border-top border-secondary">
                <a class="text-muted small text-decoration-none" href="index.html">&copy; 2020 neXtLVL Goods</a>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <script src="js/bestellUebersicht.js"></script>
    <script src="js/jquery.min.js"></script>

    <script>
        /*
    Die eigentliche Funktion des Submit Buttons wird deaktiviert.
    Daten werden nach Submit Button klick ins LocalStorage geladen
    Div mit Formular verschwindet
    Div mit Bestellübersicht wird angezeigt
    */
        $(document).ready(function() {
            //option A
            $("form").submit(function(e) {
                e.preventDefault(e);
                alert(document.getElementById("accVorname").value);
                submitToView();
                hideElement("userInput");
                showElement("userOutput");
                showData();
            });
            /*
    Zurückbutton, welche in der Bestellübersicht angezeigt wird. Formular wird wieder
    sichtbar
    Localstorage und Formular sind resetet
    */
            $('#back').click(function() {
                $('#userOutput').hide();
                $('#userInput').show();
                localStorage.clear();
                $('#bestellung').trigger("reset");
            });
        });

 /* Nach dem drücken des "Zahlungspflichtig bestellen"-Button werden die Daten aus dem
    Local Storage in die DB geladen.
       
            $('#bestellenBtn').click(function() {
                updateDB();
            });
            
    */
    </script>

</body>

</html>