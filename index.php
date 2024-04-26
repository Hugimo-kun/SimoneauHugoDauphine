<?php
require_once("utils/dataBaseManager.php");
$title = "Dauphine";

include_once("block/header.php");

$pdo = connectDB();
configPdo($pdo);

$annonces = findAllAnnonces($pdo);
?>

<div class="container">

    <h1 class="text-center"><?php echo ($title ?? "Default Title") ?></h1>
    <h2 class="text-center">Les derniers articles</h2>
    <div class="d-flex justify-content-evenly align-items-center flex-wrap gap-2">
        <?php
        foreach($annonces as $annonce) {
        ?>
            <?php include("block/annonceCard.php") ?>
        <?php
        }    
        ?>
    </div>

</div>

<?php
include_once("block/footer.php");
?>