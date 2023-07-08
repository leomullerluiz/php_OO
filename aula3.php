<?php
    //Construtor
    //Método inicializado ao instanciar uma determinada classe
    class Login{
        public $nome;
        private $email;
        private $senha;
        
        public function __construct($nome, $email, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->setSenha($senha); //É possível também utilizar os métodos 'set' dentro do construtor
        }

        public function setSenha($param){
            $this->senha = $param;
        }


    }

    $usuário = New Login("Fulano", "fulano@detal.com", "loremipsum");
    echo "<pre>";
    var_dump($usuário);


?>