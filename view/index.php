<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiya Golf Club - Free HTML CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
    <!-- Inclure FullCalendar CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet" />

    <!-- Inclure jQuery (si ce n'est pas déjà inclus dans ton projet) -->

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>


    <!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
</head>

<body>


    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                    <span class="navbar-brand-text">
                        Craftopia
                        <small></small>
                    </span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">Connexion membre
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Événements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contactez-nous</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="event-listing.html">Event Listing</a></li>
                                <li><a class="dropdown-item" href="event-detail.html">Event Detail</a></li>
                            </ul>
                        </li>

                        <!-- Notifications -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell"></i> Notifications
                                <span class="badge bg-danger">
                                    <?php
                            // Assurez-vous que le contrôleur est inclus et que la méthode retourne les notifications non lues
                            require_once '../controller/NotificationController.php';
                            $notificationController = new NotificationController();
                            $unreadNotifications = $notificationController->fetchUnreadNotifications();
                            echo count($unreadNotifications); // Affiche le nombre de notifications non lues
                            ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                                <?php
                        foreach ($unreadNotifications as $notification) {
                            echo '<li><a class="dropdown-item" href="markAsRead.php?id=' . $notification['id'] . '">' . htmlspecialchars($notification['message']) . '</a></li>';
                        }
                        ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>

                    </ul>

                    <div class="d-none d-lg-block ms-lg-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
                </div>
            </div>
        </nav>



        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column">
                <form class="custom-form member-login-form" action="#" method="post" role="form">

                    <div class="member-login-form-body">
                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                            <input type="text" name="member-login-number" id="member-login-number" class="form-control"
                                placeholder="11002560" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-password">Password</label>

                            <input type="password" name="member-login-password" id="member-login-password"
                                pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>

                        <div class="col-lg-5 col-md-7 col-8 mx-auto">
                            <button type="submit" class="form-control">Login</button>
                        </div>

                        <div class="text-center my-4">
                            <a href="#">Forgotten password?</a>
                        </div>
                    </div>
                </form>

                <div class="mt-auto mb-5">
                    <p>
                        <strong class="text-white me-3">Any Questions?</strong>

                        <a href="tel: 010-020-0340" class="contact-link">
                            010-020-0340
                        </a>
                    </p>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </div>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="section-overlay"></div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
                </path>
            </svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <h2 class="text-white">Bienvenue sur notre</h2>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span></span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Craftopia</b>
                                <b>Site</b>
                                <b>Web</b>
                            </span>
                        </h1>

                        <div class="custom-btn-group">
                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">A propos de notre site web</a>

                            <a href="#section_3" class="link smoothscroll">Devenez membre</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/MGNgbNGOzh8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-lg-5 mb-4">A propos de Craftopia</h2>
                    </div>

                    <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0" style="margin:0 0 32% 32% ;">


                        <p> Ce site web est bien plus qu’une simple plateforme de recommandation ; il s’agit d’un
                            espace qui
                            connecte artisans et amateurs de culture tunisienne. En valorisant l’authenticité et
                            l’héritage, nous espérons contribuer à préserver et à faire prospérer les traditions
                            artisanales de la Tunisie, en créant une passerelle durable entre le patrimoine et l’avenir
                            digital</p>
                    </div>




                </div>
            </div>
        </section>


        <section class="section-bg-image">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="section-bg-image-block">
                            <h2 class="mb-lg-3">Get our newsletter</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore
                                et dolore.</p>

                            <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-envelope" id="basic-addon1"></span>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required="">

                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>
        </section>


        <section class="membership-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                        <h2><span>Membership</span> at Tiya</h2>
                    </div>

                    <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                        <h4 class="mb-4 pb-lg-2">Membership Fees</h4>

                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 34%;">Yearly Access</th>

                                        <th style="width: 22%;">T1 $420</th>

                                        <th style="width: 22%;">T2 $640</th>

                                        <th style="width: 22%;">T3 $860</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-start">Golf Insurance</th>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-start">Club Facilities</th>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-start">Country Club</th>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-start">Weekend Seasonal</th>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-start">Premium Courses</th>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-start">Pro's Networking</th>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-x-circle-fill"></i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <h4 class="mb-4 pb-lg-2">Please join us!</h4>
                        <form action="#" method="post" class="custom-form membership-form shadow-lg" role="form">
                            <h4 class="text-white mb-4">Become a member</h4>

                            <div class="form-floating">
                                <input type="text" name="full-name" id="full-name" class="form-control"
                                    placeholder="Full Name" required="">

                                <label for="floatingInput">Full Name</label>
                            </div>

                            <div class="form-floating">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="Email address" required="">

                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message"
                                    placeholder="Describe message here"></textarea>

                                <label for="floatingTextarea"> Comments</label>
                            </div>

                            <button type="submit" class="form-control">Submit</button>
                    </div>
                    </form>
                </div>

            </div>
            <section class="events-section section-bg section-padding" id="section_4">
                <?php
    require_once '../controller/eventController.php';  // Inclure le contrôleur pour obtenir les événements

    // Nombre d'événements à afficher par page
    $limit = 3;

    // Page actuelle, par défaut 1
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Récupérer les événements pour la page actuelle
    $events = listEventsPaginated($page, $limit);

    // Calculer le nombre total d'événements
    $totalEvents = countEvents();

    // Calculer le nombre total de pages
    $totalPages = ceil($totalEvents / $limit);
    $calendarEvents = [];
    foreach ($events as $event) {
        $calendarEvents[] = [
            'id' => $event['id'],  // Assurez-vous que 'id' existe et est unique
            'title' => $event['title'],
            'start' => date('Y-m-d', strtotime($event['date'])),  // Format YYYY-MM-DD pour FullCalendar
            'location' => $event['location'],
            'description' => $event['description'], // Ajout de la description pour l'affichage dans la pop-up
        ];
    }

    // Convertir en JSON et l'envoyer à JavaScript
    echo '<script type="text/javascript">';
    echo 'var events = ' . json_encode($calendarEvents) . ';';
    echo '</script>';
    ?>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Événements à venir</h2>
                            <div class="search-bar mb-4">
                                <!-- Barre de recherche -->
                                <input type="text" id="searchInput" class="form-control"
                                    placeholder="Rechercher un événement...">
                            </div>
                        </div>
                    </div>

                    <div class="row" id="eventsContainer">
                        <!-- Afficher tous les événements -->
                        <?php if (!empty($events)) : ?>
                        <?php $counter = 0; ?>
                        <?php foreach ($events as $event) : ?>
                        <div class="col-lg-12 custom-block mb-3 event-item <?php echo ($counter % 2 === 0) ? 'with-border' : ''; ?>"
                            data-title="<?= htmlspecialchars(strtolower($event['title'])) ?>">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                    <div
                                        class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">
                                            <?= date('d', strtotime($event['date'])) ?>
                                        </h6>
                                        <strong class="text-white">
                                            <?= date('M Y', strtotime($event['date'])) ?>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                    <div class="custom-block-image-wrap">
                                        <img src="<?= htmlspecialchars($event['image']) ?>"
                                            class="custom-block-image img-fluid"
                                            alt="<?= htmlspecialchars($event['title']) ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 order-3 order-lg-0">
                                    <div class="custom-block-info mt-2 mt-lg-0">
                                        <a href="event-detail.php?id=<?= $event['id'] ?>" class="events-title mb-3">
                                            <?= htmlspecialchars($event['title']) ?>
                                        </a>
                                        <p class="mb-0"><?= htmlspecialchars($event['description']) ?></p>
                                        <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                            <div class="mb-4 mb-lg-0">
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <span class="custom-block-span">Location:</span>
                                                    <p class="mb-0"><?= htmlspecialchars($event['location']) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $counter++; ?>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <p class="text-center">Aucun événement à venir trouvé.</p>
                        <?php endif; ?>


                        <!-- Conteneur pour afficher le calendrier -->

                        <div class="text-center mb-4">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#calendarModal">Voir
                                le calendrier des événements</button>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrapper text-center mt-5">
                        <ul class="pagination">
                            <!-- Page précédente -->
                            <?php if ($page > 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <!-- Pages -->
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?= $i == $page ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>

                            <!-- Page suivante -->
                            <?php if ($page < $totalPages) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Modale pour afficher le calendrier -->
            <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="calendarModalLabel">Calendrier des événements</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inclure jQuery et FullCalendar -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

            <script>
            $(document).ready(function() {
                // Initialisation du calendrier avec FullCalendar
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    events: events, // Utiliser la variable 'events' générée en PHP
                    eventClick: function(info) {
                        // Afficher les détails dans une modale ou autre action
                        alert('Événement: ' + info.event.title);
                    }
                });

                // Lancer FullCalendar lorsque la modale s'ouvre
                $('#calendarModal').on('shown.bs.modal', function() {
                    calendar.render(); // Afficher le calendrier lorsque la modale est ouverte
                });

                // Réinitialiser FullCalendar à la fermeture de la modale pour éviter les problèmes de rechargement
                $('#calendarModal').on('hidden.bs.modal', function() {
                    calendar.destroy();
                    calendar = new FullCalendar.Calendar(calendarEl, {
                        events: events
                    });
                });
            });
            </script>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




            <script>
            // Fonction de recherche dynamique
            document.getElementById('searchInput').addEventListener('input', function() {
                const query = this.value.trim()
                    .toLowerCase(); // Convertir en minuscules et supprimer les espaces
                const events = document.querySelectorAll('.event-item'); // Sélectionner tous les événements

                events.forEach(event => {
                    const title = event.getAttribute('data-title'); // Obtenir le titre de l'événement
                    if (title.includes(query)) {
                        event.style.display = ''; // Afficher l'événement si le titre correspond
                    } else {
                        event.style.display = 'none'; // Masquer l'événement sinon
                    }
                });
            });
            </script>

            <style>
            /* Style pour les événements avec un cadre blanc */
            .custom-block.with-border {
                border: 2px solid #fff;
                padding: 15px;
                background-color: #f8f8f8;
            }

            /* Style pour les événements sans cadre */
            .custom-block {
                background-color: transparent;
            }
            </style>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact Tiya</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control"
                                                placeholder="Full Name" required="">

                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                class="form-control" placeholder="Email address" required="">

                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message"
                                                placeholder="Describe message here"></textarea>

                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button type="submit" class="form-control">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-info mt-5">
                                <div class="contact-info-item">
                                    <div class="contact-info-body">
                                        <strong>London, United Kingdom</strong>

                                        <p class="mt-2 mb-1">
                                            <a href="tel: 010-020-0340" class="contact-link">
                                                (020)
                                                010-020-0340
                                            </a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="mailto:info@company.com" class="contact-link">
                                                info@company.com
                                            </a>
                                        </p>
                                    </div>

                                    <div class="contact-info-footer">
                                        <a href="#">Directions</a>
                                    </div>
                                </div>

                                <img src="images/WorldMap.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    </main>

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
                    <h5 class="site-footer-title mb-4">Join Us</h5>

                    <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                        <span>Mon-Fri</span>
                        6:00 AM - 6:00 PM
                    </p>

                    <p class="d-flex me-lg-3">
                        <span>Sat-Sun</span>
                        6:30 AM - 8:30 PM
                    </p>
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
                    <p class="copyright-text">Design: <a rel="nofollow" href="https://templatemo.com"
                            target="_blank">TemplateMo</a></p>

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
    <script src="js/click-scroll.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>