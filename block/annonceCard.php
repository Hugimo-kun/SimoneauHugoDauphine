<?php 
$formatDateHeure = date("d/m/Y", strtotime($annonce["datePublication"]));
?>
<div class="col-5 border border border-dark rounded my-3">
    <a class="text-decoration-none text-dark" href="http://localhost/SimoneauHugoDauphine/annonce.php?id=<?php echo($annonce["id"])?>">
        <div class="d-flex justify-content-center">
            <img src="<?=$annonce["imageUrl"]?>" class="img-thumbnail h-75 w-75" alt="<?=$annonce["titre"]?>">
            <!-- j'ai malheureusement pas reussi à bien dimmensionner chaque image pour qu'elle fasse toute la meme taille -->
            <!-- j'ai mis titre en alt car on a pas de alt definit dans la base de donnée dans la table annonce -->
        </div>
        <h3 class="text-center mx-1 text-truncate"><?=$annonce["titre"]?></h3>
        <p class="text-center mx-1 text-truncate"><?=$annonce["contenu"]?></p>
        <div class="d-flex justify-content-between">
            <p class="mx-2 fw-bold fst-italic"><?=$annonce["auteur"]?></p>
            <p class="mx-2 text-secondary"><?=$formatDateHeure?></p>
        </div>
    </a>
</div>