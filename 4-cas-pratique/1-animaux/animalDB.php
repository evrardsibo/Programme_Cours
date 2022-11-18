<?php
    require_once './database.php';
    class AnimalDbo
    {
        public static function getAnimalBD()
        {
            $pdo = DataBase::dbConnect();
            $req = "SELECT * FROM animaux;";
            $stmt = $pdo->prepare($req);
            $stmt->execute();
            $animaux = $stmt->fetchAll();
            return $animaux;
        }

        public static function getImage($idAnimal)
        {
            $pdo = DataBase::dbConnect();
            $req = 'SELECT libelle, url FROM image i INNER JOIN image_animal ia ON i.idImage = ia.idImage WHERE ia.idAnimal = :idAnimal';
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(':idAnimal', $idAnimal, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;

        }

        public static function getTypeAnimal($idAnimal)
        {
            $pdo = DataBase::dbConnect();
            $req = 'SELECT libelle FROM type t INNER JOIN animaux a ON t.idType = a.idType WHERE a.idAnimal = :idAnimal';
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(':idAnimal', $idAnimal, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res['libelle'];
        }

    }