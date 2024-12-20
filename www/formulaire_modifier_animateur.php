<?php
// On se connecte à la base de données

require("config/config.php");

try {
    $dbh = new PDO($dsn, $identifiant, $mot_de_passe, $options);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : '.$e->getMessage();
}

// Récupérer l'ID de l'animateur depuis l'URL

if (isset($_GET['id'])) {
    $animateurId = $_GET['id'];
}
else {
    // Si l'ID n'existe pas, rediriger vers la page "index.php"

    header("Location: index.php");
    exit();
}

$resultats = $dbh->query("SELECT * FROM `animateur` WHERE id=".$animateurId.";");
$animateur = $resultats->fetch(PDO::FETCH_ASSOC);
$resultats->closeCursor();    // On ferme l'exécution de la requête une fois qu'elle est complétement terminée pour libérer une potentielle future requête
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration - Modifier un animateur</title>
        <?php include("ressources/ressourcesCommunes.php"); ?>
    </head>
    <body>
        <header>
            <?php include("navbars/navbarAdmin.php"); ?>
        </header>
        <main class="container">
            <div class="col-12 d-flex flex-column align-items-center">
                <a href="admin_animateurs.php"><i class="colorR bi bi-arrow-left-circle" style="font-size: 30px;"></i></a>
                <h1 class="colorB mt-4">Modifier l'animateur</h1>
                <img src="img/barre_separation.png" alt="Barre de séparation" class="img-fluid my-4" style="max-width: 150px;">
            </div>
            <form class="d-flex flex-column justify-content-center align-items-center" method="POST" action="executable/modifierAnimateur.php?id=<?php echo $animateurId; ?>">
                <!-- Champ caché pour récupérer l'id du stage -->
                <input type="hidden" name="id" value="<?php echo $animateurId; ?>" />
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-tag"></i>
                        <label for="nom"><h5>Nom :</h5></label>
                    </div>
                    <input class="rounded" id="nom" name="nom" type="text" value="<?php echo($animateur["nom"]); ?>" required="required">
                </div>
                <br>
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-threads"></i>
                        <label for="prenom"><h5>Prénom :</h5></label>
                    </div>
                    <input class="rounded" id="prenom" name="prenom" type="text" value="<?php echo($animateur["prenom"]); ?>" required="required">
                </div>
                <br>
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-calendar-event"></i>
                        <label for="age"><h5>Âge :</h5></label>
                    </div>
                    <input class="rounded" id="age" name="age" type="number" value="<?php echo($animateur["age"]); ?>" required="required">
                </div>
                <br>
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-telephone"></i>
                        <label for="telephone"><h5>Téléphone :</h5></label>
                    </div>
                    <input class="rounded" id="telephone" name="telephone" type="text" value="<?php echo($animateur["telephone"]); ?>" required="required">
                </div>
                <br>
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-card-text"></i>
                        <label for="description"><h5>Description :</h5></label>
                    </div>
                    <textarea class="rounded" id="description" name="description" required="required"><?php echo($animateur["description"]); ?></textarea>
                </div>
                <br>
                <div class="d-flex flex-column col-5">
                    <div>
                        <i class="colorR fs-5 me-3 bi bi-person-bounding-box"></i>
                        <label for="photo"><h5>Photo :</h5></label>
                    </div>
                    <input class="rounded" id="photo" name="photo" type="url" value="<?php echo($animateur["photo"]); ?>" required="required">
                </div>
                <br>
                <div class="d-flex flex-column col-5 align-items-center">
                    <input class="btn-warning px-4 py-2 mb-4 text-uppercase rounded-4 border border-0 col-6" type="submit" value="Ajouter l'animateur">
                </div>
            </form>
        </main>
    </body>
</html>