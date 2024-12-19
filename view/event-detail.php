<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiya Golf Club - Event Detail</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
    <link rel="stylesheet" href="./sponsor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ajouter le CSS de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Ajouter le JavaScript de Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <style>
    /* Style de la section sponsor */
    /* Section des événements */
    /* Section des événements */
    .events-section {
        background: #f4f1de;
        /* Fond beige */
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }

    .events-section h2 {
        text-align: center;
        font-size: 2.8rem;
        color: #3c405b;
        /* Mauve foncé pour le titre */
        font-weight: bold;
        margin-bottom: 40px;
        position: relative;
    }

    .events-section h2::after {
        content: '';
        width: 80px;
        height: 4px;
        background: #3c405b;
        /* Mauve foncé pour la ligne décorative */
        display: block;
        margin: 10px auto;
        border-radius: 2px;
    }

    #eventsContainer {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Carte de l'événement */
    .event-item {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
    }

    .event-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .custom-block-date-wrap {
        background: #3c405b;
        /* Mauve foncé pour la section date */
        color: #ffffff;
        text-align: center;
        padding: 10px;
        font-size: 1.2rem;
    }

    .custom-block-date-wrap h6 {
        font-size: 2rem;
        margin: 0;
        font-weight: bold;
    }

    .custom-block-date-wrap strong {
        font-size: 1.2rem;
    }

    .custom-block-image-wrap img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #e0e0e0;
    }

    .custom-block-info {
        padding: 20px;
    }

    .custom-block-info a.events-title {
        font-size: 1.4rem;
        font-weight: bold;
        color: #3c405b;
        /* Mauve foncé pour le titre de l'événement */
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s;
    }

    .custom-block-info a.events-title:hover {
        color: #1565c0;
        /* Hover effect pour le titre de l'événement */
    }

    .custom-block-info p {
        font-size: 1rem;
        color: #666666;
        margin-bottom: 15px;
    }

    .custom-block-span {
        font-weight: bold;
        color: #333333;
    }

    .custom-block-info .border-top {
        border-top: 1px solid #e0e0e0;
        padding-top: 15px;
    }

    /* Effets décoratifs */
    .events-section::before,
    .events-section::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(60, 64, 91, 0.2) 10%, transparent 80%);
        z-index: -1;
        animation: float 6s ease-in-out infinite;
    }

    .events-section::before {
        top: -50px;
        left: -50px;
    }

    .events-section::after {
        bottom: -50px;
        right: -50px;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }
    }

    /* Section des sponsors */
    .sponsor-section {
        background: #3c405b;
        /* Mauve foncé */
        color: #fff;
        padding: 50px 0;
        overflow: hidden;
        position: relative;
    }

    .sponsor-section h3 {
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #f4f1de;
        /* Beige pour le titre */
        margin-bottom: 40px;
        position: relative;
        animation: glow 1.5s infinite alternate;
    }

    /* Glow effect for the title */
    @keyframes glow {
        from {
            text-shadow: 0 0 10px #f4f1de, 0 0 20px #f4f1de, 0 0 30px #f4f1de, 0 0 40px #f4f1de;
        }

        to {
            text-shadow: 0 0 20px #f4e1b1, 0 0 30px #f4e1b1, 0 0 40px #f4e1b1, 0 0 50px #f4e1b1;
        }
    }

    .sponsor-wrapper {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .sponsor-item {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid #f4f1de;
        /* Beige pour la bordure */
        padding: 20px;
        border-radius: 20px;
        text-align: center;
        transition: transform 0.4s, box-shadow 0.4s;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        position: relative;
        overflow: hidden;
    }

    .sponsor-item:hover {
        transform: scale(1.1) rotate(-3deg);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }

    .sponsor-logo img {
        max-width: 120px;
        max-height: 120px;
        border-radius: 50%;
        border: 3px solid #f4f1de;
        /* Beige pour la bordure des logos */
        box-shadow: 0 0 15px #f4f1de;
        transition: transform 0.3s ease;
    }

    .sponsor-logo img:hover {
        transform: scale(1.2);
    }

    .sponsor-name {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 15px;
        color: #f4f1de;
        /* Beige pour le nom du sponsor */
        text-transform: uppercase;
    }

    .sponsor-description {
        font-size: 1rem;
        color: #fff;
        margin: 15px 0;
        line-height: 1.5;
    }

    .sponsor-website {
        color: #00ffdd;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: bold;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .sponsor-website:hover {
        color: #00b3b3;
        transform: scale(1.1);
    }

    /* Decorative lines */
    .sponsor-section::before,
    .sponsor-section::after {
        content: '';
        position: absolute;
        width: 200%;
        height: 300px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 20%, transparent 60%);
        animation: spin 10s linear infinite;
        z-index: 0;
    }

    .sponsor-section::before {
        top: -150px;
        left: -50%;
    }

    .sponsor-section::after {
        bottom: -150px;
        left: -50%;
        animation-direction: reverse;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
    </style>


    <!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
</head>

<body>
    <main>
        <?php
    require_once '../controller/eventController.php'; // Assurez-vous d'inclure le contrôleur pour récupérer l'événement

    // Si l'événement n'a pas été trouvé, il ne doit pas continuer l'affichage
    if (!isset($event)) {
        die('Erreur : Événement introuvable.');
    }
    ?>

        <section class=" hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 class="text-white mb-4 pb-2"><?= htmlspecialchars($event['title']); ?></h1>
                        <a href="index.php?action=list" class="btn custom-btn smoothscroll me-3">Back to Events</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="events-section events-detail-section py-5" id="section_2"
            style="background: #f4f1de; color: #fff;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Colonne Image -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="image-wrapper position-relative">
                            <img src="<?= htmlspecialchars($event['image']); ?>" class="img-fluid rounded shadow-lg"
                                alt="<?= htmlspecialchars($event['title']); ?>" style="border: 5px solid #fff;">
                            <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                style="background: rgba(0, 0, 0, 0.6); opacity: 0; transition: opacity 0.3s;">
                                <h4 class="text-light fw-bold">Explore <?= htmlspecialchars($event['title']); ?></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne Détails -->
                    <div class="col-lg-6">
                        <h2 class="mb-4" style="color: #3c405b; text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">
                            <?= htmlspecialchars($event['title']); ?>
                        </h2>
                        <p class="lead text-white-50"><?= nl2br(htmlspecialchars($event['description']));  ?></p>

                        <!-- Détails spécifiques -->
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="detail-box d-flex align-items-center">
                                    <i class="bi bi-calendar-event-fill me-3"
                                        style="font-size: 1.5rem; color: #3c405b;"></i>
                                    <div>
                                        <span class="fw-bold" style="color: #3c405b;">Date :</span>
                                        <p class="mb-0"><?= date('d M Y', strtotime($event['date'])); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="detail-box d-flex align-items-center">
                                    <i class="bi bi-geo-alt-fill me-3" style="font-size: 1.5rem; color: #3c405b;"></i>
                                    <div>
                                        <span class="fw-bold" style="color: #3c405b;">Lieu :</span>
                                        <p class="mb-0"><?= htmlspecialchars($event['location']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="map" style="height: 400px; margin-top: 20px;"></div>

                        <?php
                // Adresse récupérée de la base de données (exemple : "Sousse")
                $location = htmlspecialchars($event['location']); // Utilisez la localisation de votre base de données

                // Votre API key pour OpenCage
                $apiKey = 'fc60f0271d5d49549b08827c1e63ee7f'; 

                // Préparer l'URL de l'API OpenCage pour le géocodage
                $geocode_url = "https://api.opencagedata.com/geocode/v1/json?q=" . urlencode($location) . "&key=" . $apiKey;

                // Effectuer la requête HTTP pour récupérer les données géographiques
                $response = file_get_contents($geocode_url);

                // Décoder la réponse JSON
                $data = json_decode($response, true);

                // Vérifier si la réponse contient des résultats
                if (!empty($data['results'])) {
                    // Extraire la latitude et la longitude du premier résultat
                    $latitude = $data['results'][0]['geometry']['lat'];
                    $longitude = $data['results'][0]['geometry']['lng'];
                } else {
                    // Si aucun résultat n'est trouvé, définir des valeurs par défaut
                    $latitude = 0;
                    $longitude = 0;
                }

                ?>

                        <script>
                        // Récupérer les coordonnées depuis PHP
                        var latitude = <?= $latitude ?>;
                        var longitude = <?= $longitude ?>;

                        // Créer la carte
                        var map = L.map('map').setView([latitude, longitude],
                            13); // Utiliser les coordonnées récupérées

                        // Ajouter la couche OpenStreetMap
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        // Ajouter un marqueur à l'emplacement de l'événement
                        L.marker([latitude, longitude]).addTo(map)
                            .bindPopup('<?= htmlspecialchars($event['title']); ?>')
                            .openPopup();
                        </script>

                        <!-- Bouton S'inscrire -->
                        <div class="mt-4">
                            <a href="inscription.php?id=<?= $event['id'] ?>"
                                class="btn btn-lg px-4 py-3 text-uppercase text-light fw-bold shadow-sm"
                                style="background: #3c405b; border-radius: 30px; transition: transform 0.3s;">
                                <i class="bi bi-pencil me-2"></i>S'inscrire maintenant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <section class="sponsor-section section-padding">
        <div class="container">
            <h3 class="text-center mb-4">Sponsors</h3>
            <div class="sponsor-wrapper">
                <div class="sponsor-content">
                    <?php
                // Vérifiez si l'événement a un sponsor associé
                if (isset($event['id_sponsor']) && $event['id_sponsor']) {
                    $sponsor = getSponsorById($event['id_sponsor']);

                    if ($sponsor) {
                        echo '<div class="sponsor-item">';

                        // Affichage du logo
                        if (isset($sponsor['logo']) && !empty($sponsor['logo'])) {
                            echo '<img src="' . htmlspecialchars($sponsor['logo']) . '" class="sponsor-logo img-fluid mb-3" alt="' . htmlspecialchars($sponsor['nom_sp']) . '">';
                        } else {
                            echo '<div class="placeholder-logo mb-3">Logo non disponible</div>';
                        }

                        // Affichage du nom du sponsor
                        if (isset($sponsor['nom_sp']) && !empty($sponsor['nom_sp'])) {
                            echo '<h4 class="sponsor-name text-center mt-2">' . htmlspecialchars($sponsor['nom_sp']) . '</h4>';
                        } else {
                            echo '<h4 class="sponsor-name text-center mt-2">Nom indisponible</h4>';
                        }

                        // Affichage de la description du sponsor
                        if (isset($sponsor['description']) && !empty($sponsor['description'])) {
                            echo '<p class="sponsor-description text-center">' . nl2br(htmlspecialchars($sponsor['description'])) . '</p>';
                        } else {
                            echo '<p class="sponsor-description text-center">Description non disponible.</p>';
                        }

                        // Affichage du site web du sponsor
                        if (isset($sponsor['website']) && !empty($sponsor['website'])) {
                            echo '<a href="' . htmlspecialchars($sponsor['website']) . '" class="sponsor-website text-center d-block mt-2" target="_blank">Visiter le site</a>';
                        } else {
                            echo '<p class="sponsor-website text-center">Site web non disponible.</p>';
                        }

                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">Aucun sponsor associé à cet événement.</p>';
                }
                ?>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sponsorItems = document.querySelectorAll('.sponsor-item');

        // Effet au survol du sponsor
        sponsorItems.forEach(item => {
            item.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.05)';
                this.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.15)';
            });

            item.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)';
            });
        });
    });
    </script>




</body>



<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                    <span class="navbar-brand-text">
                        Tiya
                        <small>Golf Club</small>
                    </span>
                </a>
            </div>

            <div class="col-lg-3 col-12">
                <br>

                <br>
                <p class="copyright-text">Copyright © 2048 Tiya Golf Club</p>
            </div>

            <div class="col-lg-2 col-12 ms-auto">
                <ul class="social-icon mt-lg-5 mt-3 mb-4">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>


            </div>

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#81B29A" fill-opacity="1"
            d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</footer>


<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/custom.js"></script>

</body>

</html>