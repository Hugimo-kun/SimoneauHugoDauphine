<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/SimoneauHugoDauphine/index.php">Accueil</a>
            </li>
        </ul>
    </div>
    <div class="d-flex gap-2 me-2">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
                if ( isset($_SESSION["username"])) {
            ?>
                <li class="nav-item">
                    <a class="nav-link border border-danger bg-danger text-white rounded" href="http://localhost/SimoneauHugoDauphine/logout.php">Logout</a>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
</nav>