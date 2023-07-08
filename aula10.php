<?php
    // Interface
    // Modelo a ser usado para outras classes

    interface Crud{
        // Declaramos os métodos que deverão ser implementados pelas classes
        public function create();
        public function read();
        public function update();
        public function delete();
    }

    // A responsabilidade de definir a lógica dos métodos é da classe que implementar uma determinada Interface 
    class Noticias implements Crud{
        public function create(){
            // Script aqui   
        }
        public function read(){
            // Script aqui   
        }
        public function update(){
            // Script aqui   
        }
        public function delete(){
            // Script aqui   
        }
    }


?>