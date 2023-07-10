<?php
    // Relação entre objetos
    // Quando uma classe depende da outra
    
    class Produto{
        public $nome;
        public $valor;

        function __construct ($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho {
        public $produtos;

        public function addCarrinho(Produto $produto){ // O parâmetro do método 'addCarrinho' obrigatóriamente precisa ser uma instancia de 'Produto'
            $this->produtos[] = $produto;
        }

        public function getCarrinho(){
            foreach ($this->produtos as $produto){
                echo $produto->nome ."<br>";
                echo $produto->valor ."<hr>";
            }
        }
    }

    $produto1 = new Produto("Trident", "5");
    $produto2 = new Produto("Doritos", "11");

    $carrinho = new Carrinho();
    $carrinho->addCarrinho($produto1);
    $carrinho->addCarrinho($produto2);
    $carrinho->getCarrinho();

?>