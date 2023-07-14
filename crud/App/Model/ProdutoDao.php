<?php

    namespace App\Model;

    class ProdutoDao{

        public function create(Produto $produto){
            
            $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
            $stmt = Connection::getConn()->prepare($sql);// 'stmt' significa Statement
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getDescricao());
            $stmt->execute();

        }

        public function read(){
            $sql = 'SELECT * FROM produtos';
            //$sql = 'SELECT * FROM hollow';
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $queryResult = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $queryResult;
            }
            return [];
        }

        public function update(Produto $produto){
            $sql = 'UPDATE produtos set nome=?, descricao=? WHERE id=?';
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getDescricao());
            $stmt->bindValue(3, $produto->getId());
            $stmt->execute();
        }

        public function delete($id){
            $sql = 'DELETE FROM produtos WHERE id=?';
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }


    }
?>