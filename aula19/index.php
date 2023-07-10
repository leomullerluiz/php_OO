<?php
    require_once 'vendor/autoload.php'; //Carregar as dependências da pasta vendor

    use Cocur\Slugify\Slugify;//Slugfy converte string em url amigáveis

    $slugify = new Slugify();
    echo $slugify->slugify('Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC'); 