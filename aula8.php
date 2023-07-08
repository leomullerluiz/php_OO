<?php
    // Métodos e Atributos estáticos

    class Login{
        public static $user;

        public static function checkLogin(){
            echo "Usuário " . self::$user . " logado!";
        }
    }
    //Não é necessário instanciar a classe para acessar o método
    Login::$user = "Fulano";
    Login::checkLogin();




?>