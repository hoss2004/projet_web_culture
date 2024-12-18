<?php
// Inclure la connexion à la base de données
require_once '../../config/Database.php';

$pdo = Database::getInstance();
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<script>
        // JavaScript function to validate the category name (only letters)
        function validateCategoryName() {
            var categoryName = document.getElementById('nom').value;
            var regex = /^[A-Za-zÀ-ÿ]+$/;  // Regex to allow only letters (including accented characters)

            if (!regex.test(categoryName)) {
                alert("Le nom de la catégorie ne doit contenir que des lettres.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
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
   
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
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
<body>
    <!-- Page-header start -->
    <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                      
    

            <!-- Sidebar (Menu) -->
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
                                <a href="index.html" class="waves-effect waves-dark">
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
                                        <h5>Gestion des Catégories</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table des Catégories -->
                    <div class="pcoded-inner-content">
                    <a href="export_categories_pdf.php" class="btn btn-info">Générer le PDF</a>
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <h2>Liste des Catégories</h2>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Date Création</th>
                                                <th>Date Modification</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($categories as $category): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($category['id']) ?></td>
                                                    <td><?= htmlspecialchars($category['nom']) ?></td>
                                                    <td><?= htmlspecialchars($category['description']) ?></td>
                                                    <td><?= htmlspecialchars($category['date_creation']) ?></td>
                                                    <td><?= htmlspecialchars($category['date_modification']) ?></td>
                                                    <td>
                                                        <a href="../../controllers/CategoryController.php?action=edit&id=<?= $category['id'] ?>"
                                                            class="btn btn-primary">Modifier</a>
                                                        <a href="../../controllers/CategoryController.php?action=delete&id=<?= $category['id'] ?>"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Voulez-vous vraiment supprimer cette catégorie ?')">Supprimer</a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- Formulaire d'ajout -->
                                    <h2>Ajouter une Nouvelle Catégorie</h2>
                                    <form action="add_category.php" method="POST" onsubmit="return validateCategoryName()">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" id="description" name="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Contenu principal -->
            </div>
        </div>
    </div>
    

    <!-- Inclure les fichiers JS -->
    <script src="js/jquery/jquery.min.js"></script> <!-- jQuery -->
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap -->
    <script src="js/jquery-ui/jquery-ui.min.js"></script> <!-- jQuery UI -->
    <script src="js/jquery.slimscroll.js"></script> <!-- Slimscroll -->
    <script src="js/popper.js"></script> <!-- Popper.js -->
    <script src="js/raphael.js"></script> <!-- Raphael.js -->
    <script src="js/bootstrap-growl.min.js"></script> <!-- Bootstrap Growl -->
    <script src="js/common-pages.js"></script> <!-- Pages -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbars -->
    <script src="js/jquery.mousewheel.min.js"></script> <!-- Mousewheel Plugin -->
    <script src="js/pcoded.min.js"></script> <!-- Main JS -->
    <script src="js/script.js"></script> <!-- Custom Scripts -->
    <script src="js/script.min.js"></script> <!-- Minified Custom Scripts -->
    <script src="js/SmoothScroll.js"></script> <!-- Smooth Scroll -->
    <script src="js/vertical-layout.min.js"></script> <!-- Vertical Layout JS -->
</body>

</html>