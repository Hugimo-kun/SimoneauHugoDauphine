<?php
    $title = "Admin - Modification";
    include_once("../block/header.php");
    require_once("../utils/dataBaseManager.php");
    if(!isset($_GET["id"])) {
        header("Location: http://localhost/SimoneauHugoDauphine/admin/index.php");
    }
    if (!isset($_SESSION["username"])) {
        header("Location: http://localhost/SimoneauHugoDauphine/login.php");
    }

    $pdo = connectDB();
    configPdo($pdo);

    $id = $_GET["id"];

    $annonce = findAnnonceById($pdo, $id);

    $formatDateHeure = date("d/m/Y", strtotime($annonce["datePublication"]));
?>

<div>
    <div class="d-flex align-items-center flex-column">
        <div class="d-flex flex-column w-50">
            <img src="<?=$annonce["imageUrl"]?>" class="m-4" alt="<?=$annonce["titre"]?>">
        </div>
        <h1 class="text-center"><?php echo($annonce["titre"]) ?></h1>
        <p class="m-3"><?=$annonce["contenu"]?></p>
        <div class="d-flex justify-content-between w-100">
            <p class="mx-3 fw-bold fst-italic"><?=$annonce["auteur"]?></p>
            <p class="mx-5 text-secondary"><?=$formatDateHeure?></p>
        </div>
    </div>
</div>
<form class="d-flex flex-column align-items-center" method="POST" action="addAnnonce.php">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="<?php echo($annonce["titre"]) ?>" required>
    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu" cols="70" rows="10" required><?php echo($annonce["contenu"]) ?></textarea>
    <input type="file" id="imageUrl" name="imageUrl" class="mt-2" required>
    <label for="auteur">Votre nom d'utilisateur :</label>
    <input type="text" name="auteur" id="auteur" value="<?php echo($annonce["auteur"]) ?>" required>
    <div>
        <a class="btn btn-danger m-2" href="http://localhost/SimoneauHugoDauphine/admin/index.php">Annuler</a>
        <input type="submit" value="Ajouter" class="btn btn-success m-2">
    </div>
</form>

<?php
    include_once("../block/footer.php");
?>