<?php
    // Constante
    class Pessoa {
        const nome = "Fulano";

        public function getNome(){
            //'self' serve para se referir ao escopo da própria classe
            echo self::nome;
        }

    }

    $pessoa = new Pessoa();
    $pessoa->getNome();

    class Fulano extends Pessoa{
        const nome = "Detal";

        public function getNome(){
            //por outro lado, 'parent' é usado para se referenciar a mesma constante porém da classe "pai"
            echo parent::nome;
        }

    }

    $fulano = new Fulano();
    $fulano->getNome();


?>