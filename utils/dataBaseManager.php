<?php
    function connectDB(): PDO
    {
        try {   
            $host = "localhost";
            $databaseName = "dauphineexam";
            $user = "root";
            $password = "";
            
            $pdo = new PDO("mysql:host=". $host .";dbname=". $databaseName .";charset=utf8", $user, $password);
            
            configPdo($pdo);
            return $pdo;

        } catch (Exeption $e) {
            echo("Tu fais n'importe quoi ! ");
            exit();
        }
    }

    function configPdo(PDO $pdo){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    function findAllAnnonces(PDO $pdo)
    {
        $reponse = $pdo->query('SELECT * FROM annonce ORDER BY datePublication DESC LIMIT 10 OFFSET 0');
        // Trier par ordre décroissant comme ça on a la derniere annonce publier en premier
        return $reponse->fetchAll();
    }

    function findAnnonceById(PDO $pdo, int $id)
    {
    $query = $pdo->prepare('SELECT * FROM annonce WHERE id = :id');
    $query->execute([
        ":id" => $id
    ]);
    return $query->fetch();
    }

    function addAnnonce(PDO $pdo)
    {
        $req = $pdo->prepare(
            'INSERT INTO annonce(titre, contenu, imageUrl, auteur) VALUES(:titre, :contenu, :imageUrl, :auteur)'
        );
        $req->execute([
            ':titre' => $_POST['titre'],
            ':contenu' => $_POST['contenu'],
            ':imageUrl' => $_POST['imageUrl'],
            ':auteur' => $_POST['auteur']
        ]);
    }

    function editAnnonce(PDO $pdo, int $id)
    {
        $req = $pdo->prepare(
            'UPDATE annonce SET titre = :titre, contenu = :contenu, imageUrl = :imageUrl, auteur = :auteur');
        $req->execute([
            ':titre' => $_POST['titre'],
            ':contenu' => $_POST['contenu'],
            ':imageUrl' => $_POST['imageUrl'],
            ':auteur' => $_POST['auteur']
        ]);
    }

    function deleteAnnonce(PDO $pdo, int $id)
    {
        $req = $pdo->prepare('DELETE * FROM annonce WHERE id = :id');
        $req->execute(['id'=> ':id']);
    }
?>