<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ka'fête ô mômes - Accueil</title>
        <meta name="description" content="La Ka'fête ô mômes propose des stages de vacances scolaires pour vos enfants ! Située à Lyon, notre équipe s'engage à apporter de la joie et de la bonne humeur à chaque instant !">
        <meta name="keywords" content="Ka'fête ô mômes, association, stages, vacances scolaires, vacances, enfants, parents, familles, Lyon, équipe, animateurs">
        <?php include("ressources/ressourcesCommunes.php"); ?>
    </head>
    <body>
        <header>
            <?php include("navbars/navbarUtilisateur.php"); ?>
        </header>
        <main>

            <!-- Caroussel -->

            <section class="py-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.zupimages.net/up/24/51/od2a.jpg" class="d-block w-100 img-fluid object-fit-cover" alt="Bannière 1">
                            <div class="carousel-caption bg-dark bg-opacity-75 rounded p-2 d-flex flex-column justify-content-center">
                                <h2 class="text-uppercase text-warning text-center fs-2">Vacances d'automne 2025 - Théâtre d'improvisation</h2>
                                <p class="lead d-none d-xl-block">Plonge dans l'univers captivant du théâtre improvisé cet automne et libère ta créativité sur scène. Découvre des jeux scéniques drôles, dynamiques et pleins de surprises durant ce stage unique !</p>
                                <a href="details_stage.php?id=1" class="btn btn-warning fw-bold px-4 py-2 text-uppercase">Découvrir le stage ></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.zupimages.net/up/24/51/qwd4.jpg" class="d-block w-100 img-fluid object-fit-cover" alt="Bannière 2">
                        <div class="carousel-caption bg-dark bg-opacity-75 rounded p-2 d-flex flex-column justify-content-center">
                            <h2 class="text-uppercase text-warning text-center fs-2">Vacances d'automne 2025 - Découverte de la sérigraphie</h2>
                            <p class="lead d-none d-xl-block">Découvre l'art fascinant de la sérigraphie cet automne et crée des œuvres uniques avec tes propres mains ! Laisse libre cours à ton imagination lors de ce stage créatif !</p>
                            <a href="details_stage.php?id=3" class="btn btn-warning fw-bold px-4 py-2 text-uppercase">Découvrir le stage ></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.zupimages.net/up/24/51/h4zo.png" class="d-block w-100 img-fluid object-fit-cover" alt="Bannière 3">
                        <div class="carousel-caption bg-dark bg-opacity-75 rounded p-2 d-flex flex-column justify-content-center">
                            <h2 class="text-uppercase text-warning text-center fs-2">Vacances d'été 2025 - Cuisine</h2>
                            <p class="lead d-none d-xl-block">La Ka'fête ô mômes ouvre ses portes aux gourmands ! Cet été, mets la main à la pâte et explore l'art de la cuisine dans un stage gourmand et plein de saveurs ! Rejoins nous vite !</p>
                            <a href="details_stage.php?id=4" class="btn btn-warning fw-bold px-4 py-2 text-uppercase">Découvrir le stage ></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            
            <!-- Section 1 - Adjectifs -->
            <section class="container my-5">
                <div class="row gap-4 justify-content-center">
                        <div class="col-lg-5 col-12 d-flex align-items-center">
                            <img src="img/encadre.png" alt="Icône montrant un groupe d'adultes" class="img-fluid me-3" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h4 class="text-start">Encadré</h4>
                                <p>Nos stages sont dirigés par des professionnels qualifiés, assurant un suivi personnalisé et un accompagnement de qualité pour vos enfants !</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 d-flex align-items-center">
                            <img src="img/pedagogique.png" alt="Icône montrant une ampoule" class="img-fluid me-3" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h4 class="text-start">Pédagogique</h4>
                                <p>Chaque activité est conçue pour stimuler la créativité et l'apprentissage des enfants, tout en respectant leur rythme et leurs besoins.</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 d-flex align-items-center">
                            <img src="img/securise.png" alt="Icône montrant un bouclier" class="img-fluid me-3" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h4 class="text-start">Sécurisé</h4>
                                <p>La sécurité de vos enfants est notre priorité. Nos lieux d'activités sont sécurisés et nous veillons à une surveillance constante pour garantir leur bien-être.</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 d-flex align-items-center">
                            <img src="img/ludique.png" alt="Icône montrant un ballon" class="img-fluid me-3" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h4 class="text-start">Ludique</h4>
                                <p>Les stages sont avant tout des moments de plaisir, où les enfants apprennent en s'amusant, dans une ambiance dynamique et conviviale.</p>
                            </div>
                        </div>
                </div>
            </section>

            <!-- Section 2 - Présentation des stages -->

            <section class="container my-5">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="https://www.zupimages.net/up/24/51/zsi6.png" alt="Image montrant des enfants qui s'amusent" class="img-fluid rounded-4 img-custom">
                    </div>
                    <div class="col-lg-6 col-12 text-start">
                        <h2 class="colorB mb-4">Les stages des vacances scolaires</h2>                
                        <p class="mb-3">Nos stages de vacances scolaires offrent à vos enfants une expérience unique alliant créativité, apprentissage et plaisir ! Animés par des professionnels passionnés, ces ateliers permettent aux jeunes de découvrir des activités ludiques et pédagogiques, telles que le théâtre ou encore la sérigraphie.</p>
                        <p class="mb-4">Chaque stage est conçu pour être sécurisé, épanouissant et adapté à l'âge de vos bouts de chou, leur offrant ainsi un cadre idéal pour grandir tout en s'amusant.</p>
                        <a href="nos_stages.php"><button class="btn-warning fw-bold px-4 py-2 mb-4 text-uppercase">Découvrir nos stages ></button></a>
                    </div>
                </div>
            </section>

            <!-- Section 3 - Présentation de l'équipe -->

            <section class="container my-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="img/notre_equipe.png" alt="Image montrant notre équipe" class="img-fluid rounded-4 img-custom">
                    </div>
                    <div class="col-lg-6 col-12 text-start">
                        <h2 class="colorB mb-4">L'équipe de la Ka'fête</h2>                
                        <p class="mb-3">Notre équipe d'animateurs est avant tout une grande famille de passionnés qui met un point d'honneur à créer une atmosphère bienveillante. Chaque membre est spécialement formé pour accompagner les enfants dans leur développement tout en favorisant leur créativité et leur épanouissement. Chacun apporte sa pierre personnelle à l'édifice Ka'fête ô mômes !</p>
                        <a href="nos_animateurs.php"><button class="btn btn-warning fw-bold px-4 py-2 text-uppercase">Découvrir nos animateurs ></button></a>
                    </div>
                </div>
            </section>

            <!-- Section 4 - Nous contacter -->

            <section class="container text-center my-5">
                <h2 class="colorB mb-3">Nous contacter</h2>
                <img src="img/barre_separation.png" alt="Barre de séparation" class="img-fluid my-4" style="max-width: 150px;">

                <div class="row">
                    <!-- E-mail -->

                    <div class="col-md-4 d-flex flex-column align-items-center mt-4">
                        <div class="mb-2">
                            <i class="colorR bi bi-envelope" style="font-size: 50px;"></i>
                        </div>
                        <h4>E-mail</h4>
                        <a href="mailto:kafeteomomes@gmail.com" class="text-muted">kafeteomomes@gmail.com</a>
                    </div>
                    <!-- Téléphone -->

                    <div class="col-md-4 d-flex flex-column align-items-center mt-4">
                        <div class="mb-2">
                            <i class="colorR bi bi-telephone" style="font-size: 50px;"></i>
                        </div>
                        <h4>Téléphone</h4>
                        <a href="tel:0478612179" class="text-muted">04.78.61.21.79</a>
                    </div>
                    <!-- Adresse -->

                    <div class="col-md-4 d-flex flex-column align-items-center mt-4">
                        <div class="mb-2">
                            <i class="colorR bi bi-geo-alt" style="font-size: 50px;"></i>
                        </div>
                        <h4>Adresse</h4>
                        <a href="https://maps.app.goo.gl/ASQirf1PzVUHxMAa9" class="text-muted">53 Montée de la Grande Côte 69001, Lyon</a>
                    </div>
                </div>
            </section>
        </main>
        <?php include("navbars/footer.php"); ?>
    </body>
</html>