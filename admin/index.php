<?php
$title = "Admin";
include_once("../block/header.php");
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/SimoneauHugoDauphine/login.php");
}

require_once("../utils/dataBaseManager.php");

$pdo = connectDB();

$annonces = findAllAnnonces($pdo);
?>

<div class="container mb-3">
    <h1 class="text-center mb-3"><?php echo ($title ?? "Default Title") ?></h1>
    <div class="d-flex justify-content-center">
        <a class="border border-2 border-info text-decoration-none text-white bg-info p-2 rounded" href="http://localhost/SimoneauHugoDauphine/admin/addAnnonce.php">Ajouter une nouvelle annonce</a>
    </div>
</div>

<div class="container">

    <div class="d-flex justify-content-evenly align-items-center flex-wrap gap-2">
        <?php
        foreach($annonces as $annonce) {
        ?>
            <div class="d-flex w-50 justify-content-center">
                <a href="http://localhost/SimoneauHugoDauphine/admin/editAnnonce.php?id=<?php echo($annonce["id"])?>" class="btn btn-primary me-2">Modifier</a>
                <a href="http://localhost/SimoneauHugoDauphine/admin/deleteAnnonce.php?id=<?php echo($annonce["id"])?>" class="btn btn-danger ms-2">Supprimer</a>
            </div>
            <?php include("../block/annonceCard.php") ?>
        <?php
        }    
        ?>
    </div>

</div>

<?php
include_once("../block/footer.php");
?>