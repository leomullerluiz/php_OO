<?php
    //Nesse projeto foi usado o padrão DAO
    // Data Access Object

    require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();
    $produto->setNome('Lorem');
    $produto->setDescricao('Ipsum');
    $produto->setId(2);
    
    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->update($produto);
    //$produtoDao->create($produto);

    /*foreach($produtoDao->read($produto) as $produto){
        echo $produto['nome']."<br>";
    }*/

    echo "<hr>";
    echo "<pre>";
    var_dump($produtoDao->read($produto));


?>