<?php
include_once("../block/header.php");
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/SimoneauHugoDauphine/login.php");
}

require_once("../utils/dataBaseManager.php");
$title = "Admin";

$pdo = connectDB();

?>

<div class="container">

    <h1 class="text-center"><?php echo ($title ?? "Default Title") ?></h1>
    <h2 class="text-center">Ajout d'une nouvelle annonce</h2>
    <form class="d-flex flex-column align-items-center" method="POST" action="addAnnonce.php">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" placeholder="Votre titre içi..." required>
        <label for="contenu">Contenu :</label>
        <textarea name="contenu" id="contenu" cols="70" rows="10" placeholder="Votre contenu içi..." required></textarea>
        <input type="file" id="imageUrl" name="imageUrl" class="mt-2" required>
        <label for="auteur">Votre nom d'utilisateur :</label>
        <input type="text" name="auteur" id="auteur" placeholder="John..." required>
        <input type="submit" value="Ajouter" class="btn btn-success m-2">
    </form>

</div>

<?php
include_once("../block/footer.php");
?>
