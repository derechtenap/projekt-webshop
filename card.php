<a class="text-decoration-none" href="#" data-toggle="modal" data-target="#staticApfel">
    <div class="card rounded-0">
            <img src="/images/<?= $row['Prod_ID'] ?>.jpg" alt="">
       
        <div class="card-body next-bg-green text-white">
            <h2 class="card-title display-2 text-uppercase">
                <?= $row['ProduktName'] ?>
            </h2> <!-- Hier vlt die Farbe der jeweiligen Kategorie als BG-->
            <p class="lead">Ein cooler Text <?= $row['Prod_ID'] ?></p>
        </div>
    </div>
</a>