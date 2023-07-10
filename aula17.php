<?php
    // Métodos magicos
    // https://www.php.net/manual/pt_BR/language.oop5.magic.php

    class Pessoa{
        private $dados = array();

        public function __set($nome, $valor){
            $this->dados[$nome] = $valor;
        }

        public function __get($nome){
            return $this->dados[$nome];
        }

        public function __tostring(){
            return "Try";
        }

        public function __invoke(){
            return "Function";
        }
        
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Fulano";
    $pessoa->idade = 26;
    
    echo $pessoa; 
    echo $pessoa();

?>