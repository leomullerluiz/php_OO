<?php
    //Modificadores de acesso
    
    //public - Atributos e métodos são acessíveis de dentro e fora do escopo da classe 
    //private - Atributo é acessível apenas no escopo da classe inicial, não é acessível as classes 'extendidas'
    //protected - Acessível apenas dentro do escopo da classe


    class Veiculo {
        public $modelo;
        private $marca;
        protected $cor;

        public function getCor(){
            return $this->cor;
        }
        public function setCor($param){
            $this->cor = $param;
        }

    }

    class Van extends Veiculo{
        public $peso;

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($param){
            $this->marca = $param;
        }

    }

    $carro = new Veiculo();

    //Acessa-los diretamente assim só serve para atributos e métodos publicos
    $carro->modelo = "mobi"; 
    //Os 'getters' e 'setters' servem para acessar os atributos private e protected fora do escopo da classe
    $carro->setCor("Azul");
    echo $carro->getCor(); 

    // Uma vez em que o atributo 'marca' é privado na Classe 'Veiculo', não é possível acessa-lo fora do escopo da classe
    // Então ao tentar acessar o atributo a partir de uma classe extendida, é criado automaticamente um atributo novo
    $van = new Van();
    $van->setMarca("Mercedes Benz");
    echo "<pre>";
    var_dump($van);

?>