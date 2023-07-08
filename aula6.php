<?php
    // Abstração
    // Uma classe que serve de modelo para outras classes que são extendidas
    // impossibilitando assim de ser instanciada
    abstract class Banco{
        
        protected $saldo = 1000;

        //Um método também pode ser abstrato, porém ele precisa ser obrigatóriamente declarado na classe extendida
        abstract protected function Sacar($param);

        public function getSaldo(){
            return $this->saldo;
        }

    }

    class Itau extends Banco{

        public function Sacar($param){
            $this->saldo -= $param;
        }

    }

    $itau = new Itau();
    $itau->Sacar(100);
    echo "Saldo atual: ". $itau->getSaldo();
?>