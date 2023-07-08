<?php
    // Namespaces

    require 'classes/produto.php';
    require 'models/produto.php';

    // Para indicar qual classe de qual arquivo quero instanciar é usado os namespaces entre barra invertida 
    $produto = new \classes\Produto();
    $produto->mostrarDetalhes();

    echo "<hr>";

    use models\Produto; //Segunda opção de uso para namespaces
    $produto2 = new Produto();
    $produto2->mostrarDetalhes();

    echo "<hr>";

    use classes\Produto as produtoClass; //Terceira opção de uso para namespaces
    $produto3 = new produtoClass();
    $produto3->mostrarDetalhes();

?>