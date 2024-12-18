<?php
require_once '../../controllers/ProductController.php';

$productController = new ProductController();
$products = $productController->listProducts();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Backoffice - Gestion des Produits">
    <meta name="keywords" content="admin, gestion, produits, dashboard">
    <meta name="author" content="Votre Nom">
    <title>Backoffice - Gestion des Produits</title>

    <!-- CSS Frameworks -->
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
     <!-- Début du container de la template -->
     <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
            <!-- Header -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="codedthemes" />
        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>
</head>

<body>
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
            <!-- Header -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#">
                                    <img src="images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar -->
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="backofficecategories.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext">Catégories</span>
                                </a>
                            </li>
                            <li>
                                <a href="backofficeproduits.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-package"></i></span>
                                    <span class="pcoded-mtext">Produits</span>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                                    <span class="pcoded-mtext">Déconnexion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Contenu principal -->
                <div class="pcoded-content">
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5>Gestion des Produits</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table des Produits -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <h2>Liste des Produits</h2>
                                    <a href="add_product.php" class="btn btn-success mb-3">Ajouter un produit</a>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Catégorie</th>
                                                <th>Date Création</th>
                                                <th>Date Modification</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($products as $product): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($product['id']) ?></td>
                                                    <td><?= htmlspecialchars($product['nom']) ?></td>
                                                    <td><?= htmlspecialchars($product['description']) ?></td>
                                                    <td><?= htmlspecialchars($product['category_name']) ?></td>
                                                    <td><?= htmlspecialchars($product['date_creation']) ?></td>
                                                    <td><?= htmlspecialchars($product['date_modification']) ?></td>
                                                    <td><img src="../uploads/<?= htmlspecialchars($product['image']) ?>" alt="Image produit" width="100"></td>
                                                    <td>
                                                        <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-primary">Modifier</a>
                                                        <a href="delete_product.php?id=<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Contenu principal -->
            </div>
        </div>
    </div>

    <!-- Scripts JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/raphael.js"></script>
    <script src="assets/js/bootstrap-growl.min.js"></script>
    <script src="assets/js/common-pages.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/vertical-layout.min.js"></script>
</body>

</html>