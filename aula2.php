<?php
    //Getters and Setters
    class Login{
        //A partir do momento que um atributo de uma classe é privado (não é acessível de fora da própria classe),
        // é necessário criar métodos que possibilitem a alteração desses valores
        private $email;
        private $senha;

        public function getEmail(){//Métodos do tipo 'get' tem a função de retornar o valor daquele atributo
            return $this->email;
        }
        public function setEmail($param){//Métodos do tipo 'set' tem a função de alterar/atribuir valor ao(s) atributo(s) através do parâmetro recebido
            $this->email = $param;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($param){
            $this->senha = $param;
        }


        public function Logar(){
            if($this->email == "teste@teste.com" and $this->senha == "123"){
                echo "logado";
            }else{
                echo "dados invalidos";
            }
        }

    }

    $logar = new Login();
    $logar->setEmail("teste@teste.com");
    $logar->setSenha("123");

    $logar->Logar();
    echo "<br>";
    echo $logar->getEmail();

?>