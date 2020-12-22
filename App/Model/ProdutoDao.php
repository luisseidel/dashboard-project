<?php

namespace App\Model;

class ProdutoDao {

    public function create(Produto $produto) {
        $sql = 'INSERT INTO PRODUTOS ( nome, descricao ) VALUES ( ?, ? )';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDescricao());
        $stmt->execute();
    }

    public function read() {
        $sql = 'SELECT * FROM PRODUTOS';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> execute();

        if ($stmt->rowcount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function update(Produto $produto) {

        $sql = 'UPDATE PRODUTOS
                SET nome = ?
                ,   descricao = ?
                WHERE id = ? ';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> bindValue(1, $produto -> getNome());
        $stmt -> bindValue(2, $produto -> getDescricao());
        $stmt -> bindValue(3, $produto -> getId());

        $stmt -> execute();

    }

    public function delete($id) {

        $sql = 'DELETE FROM PRODUTOS
                WHERE id = ?';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();

    }

}

?>