<?php
    require_once("utils/dataBaseManager.php");

    if(!isset($_GET["id"])) {
        header("Location: http://localhost/SimoneauHugoDauphine/index.php");
    }

    $pdo = connectDB();
    configPdo($pdo);

    $id = $_GET["id"];

    $annonce = findAnnonceById($pdo, $id);

    $title = $annonce["titre"];
    $formatDateHeure = date("d/m/Y", strtotime($annonce["datePublication"]));
    include_once("block/header.php");
?>

<div>
    <h1 class="text-center"><?php echo($title ?? "Default Title") ?></h1>
    <div class="d-flex align-items-center">
        <div class="d-flex flex-column justify-content-center w-50">
            <img src="<?=$annonce["imageUrl"]?>" class="m-4" alt="<?=$annonce["titre"]?>">
        </div>
        <div class="d-flex flex-column border border-2 border-dark rounded me-2">
            <p class="m-3"><?=$annonce["contenu"]?></p>
            <div class="d-flex justify-content-between">
                <p class="mx-3 fw-bold fst-italic"><?=$annonce["auteur"]?></p>
                <p class="mx-5 text-secondary"><?=$formatDateHeure?></p>
            </div>
        </div>
    </div>

</div>

<?php
    include_once("block/footer.php");
?>