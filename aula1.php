<?php
    //Fundamentos

    //Classe
    class Pessoa {
        //Atributos 
        public $nome;
        public $idade;

        //Métodos
        public function Falar(){
            echo $this->nome . " /// " . $this->idade;
        }

    }

    //Instanciar classe = "Criar" Objeto
    $fulano = new Pessoa();

    //Acessar Atributos
    $fulano->nome = "Fulano de Tal";
    $fulano->idade = 21;

    //Utilização do método
    $fulano->Falar();



?>