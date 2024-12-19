<?php
session_start();
require('../model/DB.php'); // Inclure la classe de connexion à la base de données
require_once __DIR__ . '/../view/fpdf185/fpdf.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    echo "Vous devez être connecté pour vous inscrire.";
    exit;
}

// Vérifiez si l'ID de l'événement est présent
if (!isset($_GET['id'])) {
    echo "Aucun événement spécifié.";
    exit;
}

$eventId = $_GET['id'];

// Obtenez la connexion PDO
$pdo = Database::getConnection();

// Récupérez les détails de l'événement
$query = "SELECT * FROM events WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->execute(['id' => $eventId]);

// Vérifiez si l'événement existe
$event = $stmt->fetch();

if (!$event) {
    echo "Événement introuvable.";
    exit;
}

// Créez le PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, "Inscription a l'evenement : " . $event['title'], 0, 1, 'C');
$pdf->Ln(10);

// Détails de l'événement
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Date : " . $event['date'], 0, 1);
$pdf->Cell(0, 10, "Lieu : " . $event['location'], 0, 1);
$pdf->Ln(10);
$eventImage = $event['image']; // Chemin de l'image de l'événement (assurez-vous qu'il est correct)
$imagePath = __DIR__ . '/../images/' . $eventImage; // Ajustez ce chemin en fonction de votre organisation des fichiers

if (file_exists($imagePath)) {
    // Si l'image existe, l'ajouter au PDF
    $pdf->Image($imagePath, 15, 50, 180, 100, 'JPEG'); // Ajustez les coordonnées et taille selon vos besoins
} else {
    // Si l'image n'existe pas, afficher un message
    $pdf->Cell(0, 10, "Image de l'événement non disponible.", 0, 1, 'C');
}

$pdf->Ln(100);

// Détails de l'utilisateur
$pdf->Cell(0, 10, "Nom : " . $_SESSION['username'], 0, 1);
$pdf->Cell(0, 10, "Email : " . ($_SESSION['email'] ?? 'Non spécifié'), 0, 1);

// Générer et télécharger le PDF
$pdf->Output('D', 'Inscription_' . $event['title'] . '.pdf');
exit;