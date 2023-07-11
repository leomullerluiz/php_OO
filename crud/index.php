<?php
    //Nesse projeto foi usado o padrão DAO
    // Data Access Object

    require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();
    $produto->setNome('Lacta Chocolate ao Leite');
    $produto->setDescricao('165g');
    
    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->read($produto);

    foreach($produtoDao->read($produto) as $produto){
        echo $produto['nome']."<br>";
    }

    echo "<hr>";
    echo "<pre>";
    var_dump($produtoDao->read($produto));


?>