<?php
// On récupère notre URL

$Url = $_SERVER['SCRIPT_NAME'];

// On prend depuis notre URL (seulement le nom du fichier avec son extension)

$fileName = basename($Url);
?>

<!-- Navigation mobile en dessous de 992px avec menu burger -->

<div class="container navMobile">
    <div class="row justify-content-between pe-3">
        <div class="col-3"><a href="stagesAdmin.php"><img class="w-100 h-100" src="https://www.kafeteomomes.fr/uploads/2016/10/logo.png" alt="Logo de l'association"></a></div>
        <div class="menuBurger col-2">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="horsChamps shadow-lg navMobile">
    <?php
    // Permet de savoir sur quelle page nous sommes (sans JS)

    if ($fileName=="stagesAdmin.php") {
    ?>
        <ul>
            <li><a class="nude" href="stagesAdmin.php"><div class="rounded-4 selection p-3"><h5 class="mb-0">Les stages</h5></div></a></li>
            <li><a class="nude" href="animateursAdmin.php"><div class="rounded-4 p-3"><h5 class="mb-0">Les animateurs</h5></div></a></li>
        </ul>
    <?php
    }
    else {
    ?>
        <ul>
            <li><a class="nude" href="stagesAdmin.php"><div class="rounded-4 p-3"><h5 class="mb-0">Les stages</h5></div></a></li>
            <li><a class="nude" href="animateursAdmin.php"><div class="rounded-4 selection p-3"><h5 class="mb-0">Les animateurs</h5></div></a></li>
        </ul>
    <?php
    }
    ?>
</div>

<script src="js/scriptsNavbars.js"></script>

<!-- Navigation web avec menu stantard -->

<div class="container text-center mt-5 navWeb opacity-0 position-absolute">
    <div class="row justify-content-center">
        <div class="col-12 shadow-lg p-3 mb-5 bg-body-tertiary rounded-pill d-flex justify-content-between align-items-center pe-5 ps-5">
            <img class="col-lg-1 col-3" src="https://www.kafeteomomes.fr/uploads/2016/10/logo.png" alt="Logo de l'association">
            <?php
            // Permet de savoir sur quelle page nous sommes sans JS
            
            if ($fileName=="stagesAdmin.php") {
                ?>
                <a class="nude" href="stagesAdmin.php"><div class="rounded-4 selection p-3"><h5 class="mb-0">Les stages</h5></div></a>
                <a class="nude" href="animateursAdmin.php"><div class="rounded-4 p-3"><h5 class="mb-0">Les animateurs</h5></div></a>
                <?php
            }
            else {
                ?>
                <a class="nude" href="stagesAdmin.php"><div class="rounded-4 p-3"><h5 class="mb-0">Les stages</h5></div></a>
                <a class="nude" href="animateursAdmin.php"><div class="rounded-4 selection p-3"><h5 class="mb-0">Les animateurs</h5></div></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>