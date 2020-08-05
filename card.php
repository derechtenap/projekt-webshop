<!-- CARD -->
<a class="text-decoration-none" href="#" data-toggle="modal" data-target="#<?= $row['ProduktName'] ?>">
    <div class="card rounded-0 h-100">
        <!-- h-100 damit alle Cards die selbe Höhe haben -->
        <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="<?= $row['ProduktName'] ?>" class="img-fluid">

        <div class="card-body next-bg-green text-white">
            <!-- Hier vlt die Farbe der jeweiligen Kategorie als BG-->
            <h1 class="card-title display-6">
                <?= $row['ProduktName'] ?>
            </h1>
            <button type="button" class="btn btn-light mt-3 rounded-0">
                <!-- Preise auf zwei Nachkommastellen gerundet und Punkt duch Komma getauscht -->
                Ab <?= str_replace(".",",",round($row['Nettopreis']*1.19, 2)) ?> €<sup class="text-secondary"> /Stk.</sup>
            </button>
        </div>
    </div>
</a>
<!-- /CARD -->
<!-- MODAL -->
<div class="modal fade" id="<?= $row['ProduktName'] ?>" data-select="modal" data-backdrop="<?= $row['ProduktName'] ?>" data-keyboard="false" tabindex="-1" aria-labelledby="<?= $row['ProduktName'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header container">
                <h1 class="modal-title text-uppercase display-1 " id="<?= $row['ProduktName'] ?>"><?= $row['ProduktName'] ?></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="<?= $row['ProduktName'] ?>" class="img-fluid">
                    </div>
                    <div class="col-md-5">
                        <div class="container-fluid pt-3 rounded-0 p-3 bg-light text-right">
                            <h1 class="display-3 border-bottom">
                                Ab <?= str_replace(".",",",round($row['Nettopreis']*1.19, 2)) ?> €<sup class="text-secondary"> /Stk.</sup>
                            </h1>
                            <small class="d-block mb-5">Nur noch <?= $row['Lagerbesstand'] ?>x auf Lager!</small>
                            <button type="button" class="btn btn-lg btn-success">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket-fill icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                                </svg>
                                Warenkorb
                            </button>
                        </div>
                        <div class="card mt-3 rounded-0">
                            <div class="card-header font-italic">
                                <p><?= $row['Beschreibung'] ?></p>
                            </div>
                            <div class="card-body">
                                <h2 class="h5 mb-3">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-square icon-unset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg>
                                    Informationen
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">KCAL</span> <span class="float-right"><?= $row['kcal'] ?></span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">Fett</span> <span class="float-right"><?= $row['Fett'] ?>g</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">Kohlenhydrate</span> <span class="float-right"><?= $row['Kohlenhydrate'] ?>g</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">davon Zucker</span> <span class="float-right"><?= $row['davonZucker'] ?>g</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">Eiweiß</span> <span class="float-right"><?= $row['Eiweiß'] ?>g</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <span class="text-secondary text-uppercase">Herkunft</span> <span class="float-right"><?= $row['Herkunft'] ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer container mt-3">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">Zurück</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /MODAL -->