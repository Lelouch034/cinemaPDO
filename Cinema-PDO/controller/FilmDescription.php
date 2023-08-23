

<?php
require_once 'app/DAO.php';

// . Récupérer l'identifiant du film depuis l'URL
if (isset($_GET['id'])) {
    $film_id = $_GET['id'];
} else {
    die("Identifiant de film non spécifié dans l'URL.");
}

// 3. Requête SQL pour récupérer les détails du film (utilisation de requête préparée)
$sql = "SELECT * FROM movie WHERE id = :film_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':film_id', $film_id, PDO::PARAM_INT);
$stmt->execute();

// 4. Vérifier s'il y a des résultats
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // 5. Afficher les détails du film
    echo "<h1>" . $row["title"] . "</h1>";
    echo '<img src="' . $row["image_path"] . '" alt="' . $row["title"] . '"><br>';
    echo "<p>Réalisateur : " . $row["director"] . "</p>";
    echo "<p>Année de sortie : " . $row["release_date"] . "</p>";
    echo "<p>Description : " . $row["description"] . "</p>";
    // ... (affichez d'autres colonnes)
} else {
    echo "Aucun résultat trouvé pour ce film.";
}
?>
