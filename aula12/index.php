<?php
    // Referência a Objetos

    class Pessoa{
        public $idade;

        public function __clone(){ //Método inicializado ao clonar um objeto
            echo "clonagem de objeto<br>";
        }

    }

    $pessoa = new Pessoa();
    $pessoa->idade = 25;

    //$pessoa2 = $pessoa; //Dessa maneira a variavel $pessoa2 serve apenas para referenciar a $pessoa
    $pessoa2 = clone $pessoa;
    $pessoa2->idade = 35;

    echo $pessoa->idade;
    echo "<br>";
    echo $pessoa2->idade;
?>