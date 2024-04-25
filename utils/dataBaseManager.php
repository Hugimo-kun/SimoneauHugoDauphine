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
            echo("Tu fais n'importe quoi : ". $e->getMessage());
            exit();
        }
    }

    function configPdo(PDO $pdo){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    function findAllAnnonces(PDO $pdo)
    {
        $reponse = $pdo->query('SELECT * FROM annonce LIMIT 10 OFFSET 0');
        return $reponse->fetchAll();
    }
?>