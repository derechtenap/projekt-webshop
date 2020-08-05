<a class="text-decoration-none" href="#" data-toggle="modal" data-target="#<?= $row['ProduktName'] ?>" onclick="updateModal('<?= $row['ProduktName'] ?>');">
    <div class="card rounded-0 h-100">
        <!-- h-100 damit alle Cards die selbe Höhe haben -->
        <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="<?= $row['ProduktName'] ?>" class="img-fluid">

        <div class="card-body next-bg-green text-white">
            <!-- Hier vlt die Farbe der jeweiligen Kategorie als BG-->
            <h2 class="card-title display-3 text-uppercase">
                <?= $row['ProduktName'] ?>
            </h2>
            <p class="lead"><?= $row['Beschreibung'] ?> </p>
            <p><?= str_replace(".",",",round($row['Nettopreis']*1.19, 2)) ?> €/ Stk.</p> <!-- Preise auf zwei Nachkommastellen gerundet und Punkt duch Komma getauscht -->
        </div>
    </div>
</a>
<!-- MODAL -->

<div class="modal fade" id="<?= $row['ProduktName'] ?>" data-select="modal" data-backdrop="<?= $row['ProduktName'] ?>" data-keyboard="false" tabindex="-1" aria-labelledby="<?= $row['ProduktName'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header next-bg-green text-white">
                <h1 class="modal-title text-uppercase display-1 " id="<?= $row['ProduktName'] ?>"><?= $row['ProduktName'] ?></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="<?= $row['ProduktName'] ?>" class="img-fluid">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="lead mb-0">
                                    <?= $row['Beschreibung'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="h3">Inhaltsstoffe</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $row['kcal'] ?> kcal</li>
                            <li class="list-group-item"><?= $row['Fett'] ?> Fett</li>
                            <li class="list-group-item"><?= $row['Kohlenhydrate'] ?> Kohlenhydrate</li>
                            <li class="list-group-item"><?= $row['davonZucker'] ?> Kohlenhydrate (Zucker)</li>
                            <li class="list-group-item"><?= $row['Eiweiß'] ?> Eiweiß</li>
                            <li class="list-group-item"><?= $row['Herkunft'] ?> Herkunft</li>
                        </ul>
                        <div class="container-fluid pt-3">
                            <h1 class="display-3"><?= str_replace(".",",",round($row['Nettopreis']*1.19, 2)) ?> €/ Stk.</h1>
                            <button type="button" class="btn btn-lg btn-success mt-3">In den Warenkorb</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- /MODAL -->