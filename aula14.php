<?php
    // Associação
    // Quando um objeto utiliza dados de outro objeto
    class Pedido{
        public $num;
        public $cliente;
    }

    class Cliente{
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Leo Müller";
    $cliente->endereco = "Rua dos Alfeneiros, nº 4, Little Whinging";

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente = $cliente;

    $dados = array(
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco_cliente' => $pedido->cliente->endereco
    );

    echo "<pre>";
    var_dump($dados);
    echo "</pre>";


?>