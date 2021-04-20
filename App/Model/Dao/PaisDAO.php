<?php


namespace App\Model\Dao;

use App\Model\Conexao;
use App\Model\Entities\Pais;

class PaisDAO {

    public function create(Pais $pais) {
        $sql = 'INSERT INTO paises ( nome, sigla, ddi ) VALUES ( ?, ?, ? )';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt->bindValue(1, $pais->getNome());
        $stmt->bindValue(2, $pais->getSigla());
        $stmt->bindValue(3, $pais->getDdi());
        $stmt->execute();
    }

    public function read() {
        $sql = 'SELECT * FROM paises';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> execute();

        if ($stmt->rowcount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function update(Pais $pais) {
        $sql = 'UPDATE  paises
                SET     nome  = ?
                ,       sigla = ?
                ,       ddi   = ?
                WHERE   id    = ? ';

        $stmt = Conexao::getConnection() -> prepare($sql);

        $stmt -> bindValue(1, $pais -> getNome());
        $stmt -> bindValue(2, $pais -> getSigla());

        if (!is_null($pais->getDdi())) {
            $stmt -> bindValue(3, $pais -> getDdi());
        }

        $stmt -> bindValue(4, $pais -> getId());

        $stmt -> execute();
    }

    public function deleteById($id) {
        $sql = 'DELETE FROM paises WHERE id = ?';

        $stmt = Conexao::getConnection() -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
    }
}