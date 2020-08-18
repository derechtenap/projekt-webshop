<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb &ndash; neXtLVL Webshop</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/next.min.css">
</head>

<body>

    <?php
    /**Datenbankverbindung herstellen */
    require_once("../db_login.inc.php"); 
    $mysqli = login("webshopdb"); 

    /**Ausgabe der Datensätze */
    $result = $mysqli->query("SELECT * FROM t_produkte");
    ?>

    <!-- TOP LEVEL NAV -->
    <nav class="nav border-bottom small justify-content-end">

        <!-- Es gibt aktuell noch Probleme, mit der vertikalen Position der Icons. Müssen mal gucken ob das noch gefixed wird. Sonst muss ich mal gucken wie das geht -T -->

        <a href="../profil/nutzer.html" class="nav-link link-secondary" data-action="profil">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </a>

        <!-- Alle Actions werden mit Data-Attributen aktiviert -T -->

        <a href="../warenkorb/inhalt.html" class="nav-link link-secondary" data-action="warenkorb">

            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket3-fill icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 0 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z" />
                <path d="M13.489 14.605A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395L1.311 9H14.69l-1.201 5.605z" />
                <rect width="16" height="2" y="6" rx=".5" />
            </svg>
        </a>
        <a href="../hilfe/ueber-uns.html" class="nav-link link-secondary">Über uns</a>
        <a href="../hilfe/uebersicht.html" class="nav-link link-secondary">Hilfe</a>
    </nav>
    <!-- /TOP LEVEL NAV -->
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
        <div class="container">
            <a class="navbar-brand border rounded px-3" href="../index.html">neXtLVL</a>
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
                            <li><a class="dropdown-item" href="../produkte.php">Alle Produkte</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../obst.php">Obst</a></li>
                            <li><a class="dropdown-item" href="../gemuese.php">Gemüse</a></li>
                            <li><a class="dropdown-item" href="../fruechte.php">Früchte</a></li>
                            <li><a class="dropdown-item" href="../exotisch.php">Exotisch</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../rezepte.html">Rezepte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sale.php">SALE <sup><span class="badge bg-danger align-text-top" title="4 Produkte befindet sich im Sale!">4</span></sup></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NAV -->

    <!-- MAIN -->
    <main class="my-5 container">

        <h1 class="display 1 text-uppercase">Warenkorb</h1>
        <p class="lead font-weight-normal mb-5">Diese Produkte befinden sich aktuell im Warenkorb:</p>

        <p class="font-italic text-center" data-select="product_empty">Der Warenkorb ist aktuell leer!</p>
        <table class="table d-none" data-select="product_table">
            <thead>
                <tr>                    
                    <th scope="col">Artikel</th>
                    <th scope="col">Menge</th>
                    <th scope="col">Einzelpreis</th>
                    <th scope="col">Preis</th>
                </tr>
            </thead>
            <tfoot>
                <tr class="font-weight-bold bg-dark text-white">
                    <td scope="col" >Summe</td>
                    <td scope="col" data-select="sum"></td>
                    <td scope="col">&ndash;</td>
                    <td scope="col" data-select="sumPrice"></td>
                </tr>
            </tfoot>
            <tbody data-select="product_tbody"></tbody>
        </table>

        <div class="container-fluid border-top mt-5">
            <a class="btn btn-lg btn-primary my-3" href="../bestellUebersicht.html">Zur Kasse</a>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer-gradient text-white py-5">
        <div class="container">
            <section class="text-center text-md-left">
                <div class="row">
                    <hr class="clearfix w-100 d-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase"><a href="../index.html" class="text-white text-decoration-none">neXtLVL Goods</a></h5>
                        <ul class="list-unstyled">
                            <li class="small pt-3 text-light w-75">
                                neXtLVL Goods ist deine Quelle für ausgezeichnete Früche und Gemüse. Hol dir jetzt deine Portion Vitamine!
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="../produkte.php">
                            <h5 class="text-uppercase">Produkte</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="footer-secondary text-decoration-none" href="../sale.php">Sale</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../obst.php">Obst</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../gemuese.php">Gemüse</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../fruechte.php">Früchte</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../exotisch.php">Exotisch</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="../rezepte.html">
                            <h5 class="text-uppercase">Rezepte</h5>
                        </a>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="../kontakt/formular.html">
                            <h5 class="text-uppercase">Kontakt</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="footer-secondary text-decoration-none" href="../hilfe/ueber-uns.html">Über uns</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../hilfe/uebersicht.html">Hilfe</a></li>
                            <li><a class="footer-secondary text-decoration-none" href="../kontakt/impressum.html">Impressum</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="py-3 mt-3">
                <a class="footer-secondary small text-decoration-none" href="../index.html">&copy; 2020 neXtLVL Goods</a>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/addProducts.js"></script>

    <?php while($row = $result->fetch_assoc()):?>
    <script>
        localStorage.setItem('price_<?= $row['Produkt_Name'] ?>', '<?= $row['Nettopreis'] ?>')
    </script>
    <?php endwhile;?>


</body>

</html>