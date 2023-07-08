<?php
    // Herança
    // Recurso que possibilita classes compartilharem atributos e métodos

    class Veiculo {
        public $modelo;
        public $marca;
        public $cor;

        public function Andar(){
            echo "Andou";
        }

        public function Parar(){
            echo "Parou";
        }

    }

    // A partir de uma classe genérica é possível atribuir os atributos e métodos à outras classes
    // que possúem características em comum
    class Carro extends Veiculo { 
        // E criar atributos/métodos específicoas para cada classe
        public $qtdPortas;

    }

    class Moto extends Veiculo { 
        
    }

    $carro = New Carro();
    $carro->Andar();


?>