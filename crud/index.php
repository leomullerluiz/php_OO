<?php
    //Nesse projeto foi usado o padrão DAO
    // Data Access Object

    require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();
    $produto->setNome('Trident Max');
    $produto->setDescricao('5 Unidades');

    var_dump($produto);


?>