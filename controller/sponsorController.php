<?php
require_once __DIR__ . '/sponsorManager.php';  
// Ajouter un sponsor
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom_sp'])) {
    $nom_sp = $_POST['nom_sp'];
    $website = $_POST['website'] ?? null;
    $description = $_POST['description'] ?? null;

  
    $logoPath = null;
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../view/images/';
        $logoPath = $uploadDir . basename($_FILES['logo']['name']);
        if (!move_uploaded_file($_FILES['logo']['tmp_name'], $logoPath)) {
            die('Erreur : échec de l\'upload du logo.');
        }
    }

    
    addSponsor($nom_sp, $website, $description, $logoPath);
    
    header('Location: ../view/backoffice/add_sponsor.php?action=list');
    exit;
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_sponsor'])) {
    $id_sponsor = $_POST['id_sponsor'];
    $nom_sp = $_POST['nom_sp'];
    $website = $_POST['website'];
    $description = $_POST['description'];
    $logo = $_FILES['logo']['name'];

    if ($logo) {
        $target_dir = "../view/images/";
        $target_file = $target_dir . basename($logo);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
    }

   
    header('Location: ../view/backoffice/breadcrumb.php?action=list');
    exit;  
}

if (isset($_GET['delete_sponsor'])) {
    $id_sponsor = $_GET['delete_sponsor'];

    // Suppression du sponsor
    deleteSponsor($id_sponsor);

    // Redirection vers la page des sponsors après la suppression
    header('Location: ../view/backoffice/breadcrumb.php?action=list');
    exit;  // Stopper l'exécution après la redirection
}

?>