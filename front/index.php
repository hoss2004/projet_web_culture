<?php
// Inclure la connexion à la base de données
require_once '../../config/Database.php';

$pdo = Database::getInstance();
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CrafTupia</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">

</head>

</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo.JPG" class="navbar-brand-image img-fluid" alt="craftlogo">
                    <span class="navbar-brand-text">
                        CrafTupia
                    </span>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <form class="d-flex" action="barderecherche.php" method="get"
                                onsubmit="return validateSearch()">
                                <input class="form-control me-2" type="search" placeholder="Rechercher..."
                                    aria-label="Search" name="query" id="searchQuery">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images\logo.png"class="navbar-brand-image img-fluid" alt="craftlogo">
                    <span class="navbar-brand-text">
                        CrafTupia
                        <small></small>
                    </span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">Member Login</a>
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
                            <a class="nav-link click-scroll" href="#section_2">A propos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Les événements</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contactez nous</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Categories</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <?php foreach ($categories as $category): ?>
                                    <a href=""><?= htmlspecialchars($category['nom']) ?></a>
                                    <br>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                        <!-- Ajout de la barre de recherche -->
                        <li class="nav-item">
                            <form class="d-flex" action="barderecherche.php" method="get">
                                <input class="form-control me-2" type="search" placeholder="Rechercher..."
                                    aria-label="Search" name="query">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
</body>

</html>


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

    
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <h2 class="text-white">Bienvenu a CrafTupia</h2>

                <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                    <span>pour </span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">l'Inspiration</b>
                        <b>artisanale</b>
                        <b>découvrez</b>
                        <b>L'authenticité</b>
                    </span>
                </h1>

                <div class="custom-btn-group">
                    <a href="#section_2" class="btn custom-btn smoothscroll me-3">notre histoire</a>


                </div>
            </div>

            <div class="col-lg-6 col-12">

            </div>

        </div>
    </div>

    
</section>


<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-lg-5 mb-4">Plus sur CrafTupia</h2>
            </div>

            <div class="col-lg-12 col-12 text-center">


                <p><strong>Craftupia est</strong>, bien plus qu’une simple plateforme de recommandation ; il s’agit
                    d’un espace qui connecte artisans et amateurs de culture tunisienne. En valorisant l’authenticité et
                    l’héritage, nous espérons contribuer à préserver et à faire prospérer les traditions artisanales de
                    la Tunisie, en créant une passerelle durable entre le patrimoine et l’avenir digital.</p>

                <p>.Merci pour la visite.</p>
            </div>


</section>


<section class="section-bg-image">
    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0">
        </path>
        <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
            stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
            stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
            stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
            stroke-width="0"></path>
    </svg>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="section-bg-image-block">
                    



                    <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bi-envelope" id="basic-addon1"></span>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="Email address" required="">

                            <button type="submit" class="form-control">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="hsl(0, 52.00%, 95.10%)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0">
        </path>
        <path fill="hsl(0, 44.40%, 92.90%)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
            stroke-width="0"></path>
        <path fill="hsl(0, 100.00%, 95.30%)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
            stroke-width="0"></path>
        <path fill="#f9e4e3" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
            stroke-width="0"></path>
        <path fill="hsl(0, 22.70%, 91.40%)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
            stroke-width="0"></path>
    </svg>
</section>


<section class="membership-section section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                <h2><span>Membership</span>CrafTupia</h2>
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
                        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name"
                            required="">

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
    </div>
</section>


<section class="events-section section-bg section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="mb-lg-3">Upcoming Events</h2>
            </div>

            <div class="row custom-block mb-3">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div
                        class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>

                        <strong class="text-white">Feb 2048</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="event-detail.php">
                            <img src="images/professional-golf-player.jpg" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="event-detail.php" class="events-title mb-3">Private activities</a>

                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>

                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="mb-4 mb-lg-0">
                                <div class="d-flex flex-wrap align-items-center mb-1">
                                    <span class="custom-block-span">Location:</span>

                                    <p class="mb-0">National Center, NYC</p>
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    <span class="custom-block-span">Ticket:</span>

                                    <p class="mb-0">$250</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row custom-block custom-block-bg">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div
                        class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>

                        <strong class="text-white">Feb 2048</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="event-detail.php">
                            <img src="images\girl-taking-selfie-with-friends-golf-field.webp""
                                class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="event-detail.php" class="events-title mb-3">Group tournament activities</a>

                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>

                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="mb-4 mb-lg-0">
                                <div class="d-flex flex-wrap align-items-center mb-1">
                                    <span class="custom-block-span">Location:</span>

                                    <p class="mb-0">National Center, NYC</p>
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    <span class="custom-block-span">Ticket:</span>

                                    <p class="mb-0">$350</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="event-detail.php" class="btn custom-btn">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


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
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="Email address" required="">

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
                            <strong>Tunisia</strong>

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
                        Craf
                        <small>Tupia</small>
                    </span>
                </a>
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