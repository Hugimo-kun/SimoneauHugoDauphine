<?php
include_once("../block/header.php");
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/SimoneauHugoDauphine/login.php");
}

require_once("../utils/dataBaseManager.php");
$title = "Admin";

$pdo = connectDB();

$annonces = findAllAnnonces($pdo);
?>

<div class="container mb-3">

    <h1 class="text-center"><?php echo ($title ?? "Default Title") ?></h1>
    <div class="d-flex justify-content-around">
        <a class="border border-2 border-info text-decoration-none text-white bg-info p-2 rounded" href="http://localhost/SimoneauHugoDauphine/admin/addAnnonce.php">Ajouter une nouvelle annonce</a>
        <a class="border border-2 border-info text-decoration-none text-white bg-info p-2 rounded" href="http://localhost/SimoneauHugoDauphine/admin/addAnnonce.php">Ajouter une nouvelle annonce</a>
        <a class="border border-2 border-info text-decoration-none text-white bg-info p-2 rounded" href="http://localhost/SimoneauHugoDauphine/admin/addAnnonce.php">Ajouter une nouvelle annonce</a>
    </div>
</div>

<div class="container">

    <div class="d-flex justify-content-evenly align-items-center flex-wrap gap-2">
        <?php
        foreach($annonces as $annonce) {
        ?>
            <?php include("../block/annonceCard.php") ?>
        <?php
        }    
        ?>
    </div>

</div>

<?php
include_once("../block/footer.php");
?>