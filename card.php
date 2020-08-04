<a class="text-decoration-none" href="#" data-toggle="modal" data-target="#staticApfel">
    <div class="card rounded-0">
            <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="">
       
        <div class="card-body next-bg-green text-white"> <!-- Hier vlt die Farbe der jeweiligen Kategorie als BG-->
            <h2 class="card-title display-2 text-uppercase">
                <?= $row['ProduktName'] ?>
            </h2> 
            <p class="lead"><?= $row['Beschreibung'] ?> </p>
            <p><?= $row['Nettopreis']*1.19 ?> €/ Stk.</p>
        </div>
    </div>
</a>