<a class="text-decoration-none" href="#" data-toggle="modal" data-target="#staticApfel">
    <div class="card rounded-0 h-100"> <!-- h-100 damit alle Cards die selbe Höhe haben -->
            <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="<?= $row['ProduktName'] ?>" class="img-fluid">
       
        <div class="card-body next-bg-green text-white"> <!-- Hier vlt die Farbe der jeweiligen Kategorie als BG-->
            <h2 class="card-title display-2 text-uppercase">
                <?= $row['ProduktName'] ?>
            </h2> 
            <p class="lead"><?= $row['Beschreibung'] ?> </p>
            <p><?= str_replace(".",",",round($row['Nettopreis']*1.19, 2)) ?> €/ Stk.</p> <!-- Preise auf zwei Nachkommastellen gerundet und Punkt duch Komma getauscht -->
        </div>
    </div>
</a>