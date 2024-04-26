<?php
    $title = "Admin - Suppression";
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

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
        $res = deleteAnnonce($pdo, $id);
        header('Location: http://localhost/SimoneauHugoDauphine/admin/index.php');
    }
?>

<div>
    <div>
        <p class="text-center fw-bold fs-3 mt-2">Êtes-vous certains de vouloir supprimer cette annonce ?</p>
        <div class="d-flex justify-content-center">
            <form method="POST" action="deleteAnnonce.php?id=<?=$id?>">
                <a class="btn btn-danger m-2" href="http://localhost/SimoneauHugoDauphine/admin/index.php">Annuler</a>
                <input type="hidden" value="1" name="delete">
                <input type="submit" value="Confirmer" class="btn btn-success">
            </form>
        </div>
    </div>
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

<?php
    include_once("../block/footer.php");
?>