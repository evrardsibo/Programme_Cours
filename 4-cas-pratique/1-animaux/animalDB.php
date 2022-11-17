<?php
    require_once './database.php';
    class AnimalDbo
    {
        private static $pdo;
        private static $id;

        public static function animaux()
        {
            self::$pdo = DataBase::dbConnect();
            $req = 'SELECT * FROM animaux';
            $stmt = self::$pdo->prepare($req);
            $stmt->execute();
            $animaux = $stmt->fetchAll();
            return $animaux;
        }

        public static function image()
        {
            self::$pdo = DataBase::dbConnect();
            $req = 'SELECT * FROM image';
            $stmt = self::$pdo->prepare($req);
            $stmt->execute();
            $image = $stmt->fetchAll();
            return $image;

        }

        public static function imageAnimal($id)
        {
            self::$id = $id;
            self::$pdo = DataBase::dbConnect();
            $req = 'SELECT * FROM image_animal WHERE idAnimal = :idImage';
            $stmt = self::$pdo->prepare($req);
            $stmt->bindValue(':idImage', $id);
            $stmt->execute();
            $image_animal = $stmt->fetch();
            return $image_animal;
        }

    }