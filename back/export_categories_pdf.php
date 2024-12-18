<?php
require '../../pdf/fpdf.php'; // Inclure la bibliothèque FPDF
require_once '../../config/Database.php'; // Connexion à la base de données

$pdo = Database::getInstance();

// Récupérer les catégories
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

// Créer une instance de FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// Titre du PDF
$pdf->Cell(0, 10, 'Liste des Categories', 0, 1, 'C');
$pdf->Ln(10);

// En-têtes de colonnes
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(60, 10, 'Nom', 1);
$pdf->Cell(60, 10, 'Description', 1);
$pdf->Cell(50, 10, 'Date Creation', 1);
$pdf->Ln();

// Remplir les données
$pdf->SetFont('Arial', '', 12);
foreach ($categories as $category) {
    $pdf->Cell(20, 10, $category['id'], 1);
    $pdf->Cell(60, 10, $category['nom'], 1);
    $pdf->Cell(60, 10, $category['description'], 1);
    $pdf->Cell(50, 10, $category['date_creation'], 1);
    $pdf->Ln();
}

// Sortie du PDF
$pdf->Output('D', 'categories.pdf');
?>
