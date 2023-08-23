<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css">
    <link rel="shortcut icon" href="../public/img/icons8-film-projector-48.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js" integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&family=VT323&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="C:\laragon\www\Cinema-PDO\public\css\style.css">
    

    <title>Document</title>
</head>
<body>
    
<?php
require_once 'C:\laragon\www\Cinema-PDO\app\DAO.php';

// Créez une instance de la classe DAO pour obtenir la connexion PDO
$dao = new DAO();

// Récupérez l'identifiant du film depuis l'URL
if (isset($_GET['id'])) {
    $film_id = $_GET['id'];
} else {
    die("Identifiant de film non spécifié dans l'URL.");
}

// Requête SQL pour récupérer les détails du film en utilisant la connexion PDO
$sql = "SELECT * FROM film WHERE id_film = $film_id";

// Exécutez la requête SQL en utilisant PDO
$result = $dao->executeRequest($sql);

// Vérifiez s'il y a des résultats
if ($result && $result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    // Afficher les détails du film
    echo "<h1 class='film-title'>" . $row["title"] . "</h1>";
    echo '<img src="' . $row["picture"] . '" alt="' . $row["title"] . '"><br>';
    echo "<p>Réalisateur : " . $row["acteur"] . "</p>";
    echo "<p>Année de sortie : " . $row["date_release"] . "</p>";
    echo "<p>Description : " . $row["synopsis"] . "</p>";
    // ... (affichez d'autres colonnes)
} else {
    echo "Aucun résultat trouvé pour ce film.";
}
?>
</body>
</html>



