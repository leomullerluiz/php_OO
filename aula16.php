<?php
    // Relação entre Objetos pt.2
    // Composição
    // Quando uma classe cria dentro dela uma instância de outra classe

    class Pessoa{

        public function setNome($nome){
            return "Nome: ". $nome;
        }

    }

    class Exibe{
        public $pessoa;
        public $nome;

        function __construct($nome){

            $this->pessoa = new Pessoa();
            $this->nome = $nome;

        }

        public function getNome(){
            echo $this->pessoa->setNome($this->nome);
        }
    }

    $exibe = new Exibe("Leo Müller");
    $exibe->getNome();

?>