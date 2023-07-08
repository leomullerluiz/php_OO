<?php
    // Polimorfismo

    class Animal{

        public function Andar(){
            echo "O animal andou";
        }

        public function Correr(){
            echo "O animal correu";
        }

    }


    class Cavalo extends Animal{
        // Polimorfismo é reescrever um método da classe "pai"
        public function Andar(){
            $this->Correr();
        }

    }

    $animal = new Cavalo();
    $animal2 = new Animal();
    // Método Andar esta referenciando a função Correr() para todos os objetos instanciados a partir da classe 'Cavalo'
    $animal->Andar();
    echo "<hr>";
    $animal->Correr();
    echo "<hr>";
    $animal2->Andar();
    echo "<hr>";
    $animal2->Correr();
    echo "<hr>";

?>