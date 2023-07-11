<?php

    namespace App\Model;

    class Connection{
        // Padrão Singleton para uma unica instancia da aplicação
        private static $instance;

        public static function getConn(){
            if(!isset(self::$instance)){
                self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf-8', 'root', '');
            }
            
            return self::$instance;
            
        }
    }
?>