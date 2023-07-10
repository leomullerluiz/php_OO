<?php
    // Tratamento de Exceções
    // Exception tem o objetivo de informar um comportamento anormal dentro do código
    // https://www.php.net/manual/pt_BR/language.exceptions.php


    class Newsletter{

        public function cadastraEmail($email){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                throw new Exception("E-mail inválido", 123456);
            }else{
                echo "E-mail cadastrado com sucesso";
            }
        }
    }

    $newsletter = new Newsletter();
    try{// Tentativa de execução do método
        $newsletter->cadastraEmail("leomullerluizgmail.com"); // Método
    } catch(Exception $e){// Script que será executado em caso de erro
        echo $e->getMessage()."<br>";
        echo $e->getCode()."<br>";
        echo $e->getFile()."<br>";
        echo $e->getLine()."<br>";
        echo $e->getTrace()."<br>";
        echo $e->getTraceAsString()."<br>";
    }
    

?>