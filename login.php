<?php
require_once("utils/dataBaseManager.php");
$title = "Login";

$errors = [];

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["username"], $_POST["password"])
) {
    $pdo = connectDB();

    $query = $pdo->prepare('SELECT username, password FROM utilisateur WHERE username = :username');
    $query->execute([
        ":username" => $_POST["username"]
    ]);
    $user = $query->fetch();

    if ($user !== false) {
        if (password_verify($_POST["password"], $user["password"])) {
            session_start();

            $_SESSION["username"] = $_POST["username"];

            header("Location: http://localhost/SimoneauHugoDauphine/admin/index.php");
        }else {
            $errors["global"] = "Identifiants invalides";
        }
    } else {
        $errors["global"] = "Identifiants invalides";
    }
}

include_once("block/header.php");
?>

<div class="container">
    <h1 class="text-center m-3"><?php echo ($title) ?></h1>

    <form class="d-flex flex-column align-items-center" method="POST" action="login.php">

        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <?php
        if (isset($errors["global"])) {
            echo ("<p class='text-danger'>" .
                $errors["global"] . "</p>");
        }
        ?>

        <input type="submit" value="Valider" class="btn btn-primary m-2">
    </form>

</div>

<?php
include_once("block/footer.php");
?>