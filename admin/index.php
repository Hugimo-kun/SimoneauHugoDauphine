<?php
//session_start();
include_once("../block/header.php");
// Ce if permet de verifier la connexion, d'un utilisateur
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/SimoneauHugoDauphine/login.php");
}

require_once("../utils/dataBaseManager.php");
$title = "Admin";

$pdo = connectDB();

?>

<div class="container">

    <h1 class="text-center"><?php echo ($title ?? "Default Title") ?></h1>

</div>

<?php
include_once("../block/footer.php");
?>