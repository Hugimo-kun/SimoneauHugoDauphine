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

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["titre"], $_POST["contenu"], $_POST["auteur"])) {
        if (isset($_FILES['imageUrl']) AND $_FILES['imageUrl']['error'] == 0) {
            echo("bla");
            if ($_FILES['imageUrl']['size'] <= 1000000)
            {
                $extension = explode('/', $_FILES['imageUrl']['type'])[1];
                $extensions_autorisees = array('jpg', 'jpeg', 'png', 'webp');
                if (in_array($extension, $extensions_autorisees))
                {
                    move_uploaded_file($_FILES['imageUrl']['tmp_name'], '../img/' . basename($_FILES['imageUrl']['name']));
                    echo("<p>Votre annonce a bien été modifier :)<p>");
                    echo("<a class='btn btn-info m-2' href='http://localhost/SimoneauHugoDauphine/admin/index.php'>Retourner au menu</a>");
                } else {
                    echo('<p class="text-center">J\'accepte que les images ...</p>');
                }
            } else {
                echo('<p class="text-center">le fichier est trop lourd pour un petit serveur ... </p>');
            }
        }

        $query = $pdo->prepare('UPDATE annonce SET titre = :titre, auteur = :auteur, contenu = :contenu, imageUrl = :imageUrl WHERE id = :id');
            $query->execute([
            ":titre" => $_POST["titre"],
            ":auteur" => $_POST["auteur"],
            ":contenu" => $_POST["contenu"],
            ":imageUrl" => 'http://localhost/SimoneauHugoDauphine/img/' . basename($_FILES['imageUrl']['name']),
            ":id" => $id
            ]);
    }

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
<form class="d-flex flex-column align-items-center" enctype="multipart/form-data" method="POST" action="editAnnonce.php?id=<?=$id?>">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="<?php echo($annonce["titre"]) ?>" required>
    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu" cols="70" rows="10" required><?php echo($annonce["contenu"]) ?></textarea>
    <input type="file" id="imageUrl" name="imageUrl" class="mt-2">
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