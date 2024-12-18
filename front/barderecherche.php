<?php
// Barderecherche.php : Traitement de la recherche

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=artisanat', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour rechercher dans les produits et les catégories
        $stmt = $pdo->prepare("
            SELECT 
                p.nom AS product_name,
                p.description AS product_description,
                c.nom AS category_name
            FROM 
                products p
            LEFT JOIN 
                categories c
            ON 
                p.category_id = c.id
            WHERE 
                p.nom LIKE :query OR 
                p.description LIKE :query OR
                c.nom LIKE :query
        ");
        
        $stmt->execute(['query' => '%' . $query . '%']);
        $result = $stmt->fetchAll();

        if ($result) {
            // Afficher les résultats de la recherche
            echo "<h2>Résultats pour '$query':</h2>";
            foreach ($result as $row) {
                echo "<div>";
                echo "<h3>Produit : " . htmlspecialchars($row['product_name']) . "</h3>";
                echo "<p>Description : " . htmlspecialchars($row['product_description']) . "</p>";
                echo "<p>Catégorie : " . htmlspecialchars($row['category_name']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "Aucun résultat trouvé pour '$query'.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Veuillez entrer un terme de recherche.";
}
?>
