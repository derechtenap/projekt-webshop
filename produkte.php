<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkte &ndash; neXtLVL Webshop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/next.min.css">

    <!-- Diese Skripte müssen am Start des Dokuments liegen -->
    <script src="js/jquery.min.js"></script>
    <script src="js/sale.js"></script>

</head>

<body>

    <?php
    /**Datenbankverbindung herstellen */
    require_once("db_login.inc.php"); 
    $mysqli = login("webshopdb"); 

    /**Ausgabe der Datensätze */
    $result = $mysqli->query("SELECT * FROM t_produkte"); // Select all wegen den Inhaltsstoffen etc.
    ?>

    <!-- TOP LEVEL NAV -->
    <nav class="nav border-bottom small justify-content-end">

        <!-- Es gibt aktuell noch Probleme, mit der vertikalen Position der Icons. Müssen mal gucken ob das noch gefixed wird. Sonst muss ich mal gucken wie das geht -T -->

        <a href="profil/nutzer.html" class="nav-link link-secondary" data-action="profil">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </a>

        <!-- Alle Actions werden mit Data-Attributen aktiviert -T -->

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
                            <li><a class="dropdown-item" href="#">Obst</a></li>
                            <li><a class="dropdown-item" href="#">Gemüse</a></li>
                            <li><a class="dropdown-item" href="#">Früchte</a></li>
                            <li><a class="dropdown-item" href="#">Exotisch</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="produkte/neuheiten.html">Rezepte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sale.php">SALE <sup><span class="badge bg-danger align-text-top" title="0 Produkte befinden sich im Sale!" data-select="notification_badge">0</span></sup></a>
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

    <!-- MAIN -->
    <main class="my-5 container-main">

        <!-- TOAST FÜR WARENKORB INPUT -->

        <div aria-live="polite" aria-atomic="true" style="position: relative;">
            <div class="toast" style="position: absolute; top: 0; right: 0;" data-id="toast_warenkorb" data-delay="5000">
                <div class="toast-header">
                    <!--<img src="..." class="rounded mr-2" alt="...">-->
                    <strong class="mr-auto"><span data-id="product_name"></span> wurde dem Warenkorb hinzugefügt!</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <span class="font-weight-bold" data-id="product_cnt">0</span> <span class="font-weight-bold" data-id="product_name"></span> wurde dem Warenkorb hinzugefügt. Sie können gerne weitere Produkte hinzufügen!
                </div>
            </div>
        </div>

        <!-- Wir sollten am besten transparente Bilder hier benutzen. Damit der Farbeffekt wirkt -T -->

        <!-- Card -->
        <section class="container" id="produkte">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php while($row = $result->fetch_assoc()):?>
                <div class="col">
                    <?php include 'card.php' ?>
                </div>
                <?php endwhile;?>
            </div>
        </section>
        <!-- /Card -->

    </main>
    <!-- /MAIN -->

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
                        <a class="text-white text-decoration-none" href="produkte/uebersicht.html">
                            <h5 class="text-uppercase">Produkte</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="text-white text-decoration-none" href="produkte/obst.html">Obst</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte/gemuese.html">Gemüse</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte/fruechte.html">Früchte</a></li>
                            <li><a class="text-white text-decoration-none" href="produkte/exotisch.html">Exotisch</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <a class="text-white text-decoration-none" href="#">
                            <h5 class="text-uppercase">Neuheiten</h5>
                        </a>
                        <ul class="list-unstyled">
                            <li><a class="text-white text-decoration-none" href="sale.php">Sale</a></li>
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

    <script>
        // Verstecke Elemente beim Seitenaufbau
        $(window).on('load', function() {
            $('[data-select="btn_g_sum"]').hide();
            $('[data-select="notification"]').hide();
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/produkte.js"></script>

</body>

</html>