<?php
require_once('../../pdf/fpdf.php');
require_once('../../controllers/ProductController.php');

// Create instance of ProductController
$productController = new ProductController();
$products = $productController->listProducts();

// Initialize FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Use Arial font (standard font in FPDF)
$pdf->SetFont('Arial', '', 12);

// Set Title
$pdf->Cell(200, 10, utf8_decode('Liste des Produits'), 0, 1, 'C');

// Set column headers
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(50, 10, 'Nom', 1);
$pdf->Cell(70, 10, 'Description', 1);
$pdf->Cell(30, 10, 'Catégorie', 1);
$pdf->Cell(30, 10, 'Date Creation', 1);
$pdf->Cell(30, 10, 'Date Modification', 1);
$pdf->Ln();

// Set product details
foreach ($products as $product) {
    $pdf->Cell(20, 10, $product['id'], 1);
    $pdf->Cell(50, 10, utf8_decode($product['nom']), 1);  // Decode UTF-8 to ISO-8859-1
    $pdf->Cell(70, 10, utf8_decode($product['description']), 1);  // Decode UTF-8 to ISO-8859-1
    $pdf->Cell(30, 10, utf8_decode($product['category_name']), 1);  // Decode UTF-8 to ISO-8859-1
    $pdf->Cell(30, 10, $product['date_creation'], 1);
    $pdf->Cell(30, 10, $product['date_modification'], 1);
    $pdf->Ln();
}

// Output the PDF
$pdf->Output('D', 'products_list.pdf');

?>
