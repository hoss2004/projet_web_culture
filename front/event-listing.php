<?php
// Inclure le contrôleur
require_once '../controllers/ProductController.php';

// Initialiser le contrôleur
$productController = new ProductController();
$products = $productController->listProducts();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiya Golf Club - Event Listing</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
</head>

<body>
    <main>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                    <span class="navbar-brand-text">Tiya <small>Golf Club</small></span>
                </a>
            </div>
        </nav>

        <!-- Section Produits -->
        <section class="events-section section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h2 class="mb-lg-5 mb-4">Nos Produits Récents</h2>
                    </div>

                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="custom-block-image-wrap">
                                    <img src="<?= htmlspecialchars($product['image']) ?>" class="custom-block-image img-fluid" alt="<?= htmlspecialchars($product['nom']) ?>">
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="events-title mb-2"><?= htmlspecialchars($product['nom']) ?></h5>
                                    <p class="mb-0"><?= htmlspecialchars($product['description']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <p class="text-center">Aucun produit disponible pour le moment.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                        <span class="navbar-brand-text">Tiya <small>Golf Club</small></span>
                    </a>
                </div>
                <div class="col-lg-3 col-12">
                    <h5 class="site-footer-title mb-4">Join Us</h5>
                    <p class="d-flex border-bottom pb-3 mb-3 me-lg-3"><span>Mon-Fri</span> 6:00 AM - 6:00 PM</p>
                </div>
                <div class="col-lg-2 col-12 ms-auto">
                    <ul class="social-icon mt-lg-5 mt-3 mb-4">
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
