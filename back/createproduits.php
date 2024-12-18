<?php
// Vérification des erreurs ou messages success si nécessaire
if (isset($message)) {
    echo "<p>$message</p>";
}
?>

<h2>Ajouter une nouvelle catégorie</h2>

<form action="../../controllers/CategoryController.php?action=create" method="POST">
    <div>
        <label for="nom">Nom de la catégorie :</label>
        <input type="text" id="nom" name="nom" required placeholder="Entrez le nom de la catégorie" />
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required
            placeholder="Entrez une description pour cette catégorie"></textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Ajouter la catégorie</button>
        <a href="backofficecategories.php" class="btn btn-secondary">Retour à la liste</a>
    </div>
</form>