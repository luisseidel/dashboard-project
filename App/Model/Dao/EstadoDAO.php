<?php


namespace App\Model\Dao;

use App\Model\Conexao;
use App\Model\Estado as Estado;

class EstadoDAO {

    public function create(Estado $e) {
        $sql = 'INSERT INTO estados ( nome, sigla, id_pais ) VALUES ( ?, ?, ? )';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt->bindValue(1, $e->getNome());
        $stmt->bindValue(2, $e->getSigla());
        $stmt->bindValue(3, $e->getPais()->getId());
        $stmt->execute();
    }

    public function read() {
        $sql = 'SELECT * FROM estados';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> execute();

        if ($stmt->rowcount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function update(Estado $e) {
        $sql = 'UPDATE  estados
                SET     nome    = ?
                ,       sigla   = ?
                ,       id_pais = ?
                WHERE   id      = ? ';

        $stmt = Conexao::getConnection() -> prepare($sql);

        $stmt -> bindValue(1, $e->getNome());
        $stmt -> bindValue(2, $e->getSigla());
        $stmt -> bindValue(3, $e->getPais()->getId());
        $stmt -> bindValue(4, $e->getId());

        $stmt -> execute();
    }

    public function deleteById($id) {
        $sql = 'DELETE FROM estados WHERE id = ?';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
    }
}