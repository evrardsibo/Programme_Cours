<?php

    
    /**
     * Database
     * mysql:dbname=animal;host=localhost
     */
    class DataBase {
        private const HOST_NAME = 'localhost';
        private const DB_NAME = 'animal';
        private const USER = 'root';
        private const PASSWORD = '';
        
        private static $pdo = null;

        public static function dbConnect()
        {
            if (is_null(self::$pdo)) {
                
                try {
                    $option = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  ,
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
                    $connect = 'mysql:dbname='.self::DB_NAME;'host='.self::HOST_NAME;

                    self::$pdo = new PDO($connect,self::USER,self::PASSWORD,$option);

                } catch (PDOException $e) {
                    $message ='error to connect on databes :'. $e->getMessage();
                    die($message);
                }
            }

            return self::$pdo;
        }
    }


   
    