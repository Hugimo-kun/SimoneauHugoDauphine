<?php
$title = "Admin - Nouvelle Annonce";
include_once("../block/header.php");
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/SimoneauHugoDauphine/login.php");
}

require_once("../utils/dataBaseManager.php");

$pdo = connectDB();

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["titre"], $_POST["contenu"], $_POST["auteur"])) {
    if (isset($_FILES['imageUrl']) AND $_FILES['imageUrl']['error'] == 0) {
        if ($_FILES['imageUrl']['size'] <= 1000000)
        {
            $extension = explode('/', $_FILES['imageUrl']['type'])[1];
            $extensions_autorisees = array('jpg', 'jpeg', 'png', 'webp');
            if (in_array($extension, $extensions_autorisees))
            {
                move_uploaded_file($_FILES['imageUrl']['tmp_name'], '../img/' . basename($_FILES['imageUrl']['name']));
                echo("<p>Votre annonce a bien été envoyé :)<p>");
                echo("<a class='btn btn-info m-2' href='http://localhost/SimoneauHugoDauphine/admin/index.php'>Retourner au menu</a>");
            } else {
                echo('<p class="text-center">J\'accepte que les images ...</p>');
            }
        } else {
            echo('<p class="text-center">le fichier est trop lourd pour un petit serveur ... </p>');
        }
    }

    $query = $pdo->prepare('INSERT INTO annonce(titre, auteur, contenu, imageUrl)
        VALUES(:titre, :auteur, :contenu, :imageUrl)');
        $query->execute([
        ":titre" => $_POST["titre"],
        ":auteur" => $_POST["auteur"],
        ":contenu" => $_POST["contenu"],
        ":imageUrl" => 'http://localhost/SimoneauHugoDauphine/img/' . basename($_FILES['imageUrl']['name'])
        ]);
}

?>

<div class="container">

    <h1 class="text-center">Ajout d'une nouvelle annonce</h1>
    <form class="d-flex flex-column align-items-center" method="POST" action="addAnnonce.php" enctype="multipart/form-data">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" placeholder="Votre titre içi..." required>
        <label for="contenu">Contenu :</label>
        <textarea name="contenu" id="contenu" cols="70" rows="10" placeholder="Votre contenu içi..." required></textarea>
        <input type="file" id="imageUrl" name="imageUrl" class="mt-2">
        <label for="auteur">Votre nom d'utilisateur :</label>
        <input type="text" name="auteur" id="auteur" placeholder="John..." required>
        <div>
            <a class="btn btn-danger m-2" href="http://localhost/SimoneauHugoDauphine/admin/index.php">Annuler</a>
            <input type="submit" value="Ajouter" class="btn btn-success m-2">
        </div>
    </form>

</div>

<?php
include_once("../block/footer.php");
?>
