<?php


namespace App\Model\Entities;

use App\Model\Entities\Estado as Estado;

class Cidade {

    private $id;
    private $nome;
    private Estado $estado;

    /**
     * Cidade constructor.
     * @param $id
     * @param $nome
     * @param Estado $estado
     */
    public function __construct($id, $nome, Estado $estado) {
        $this->id = $id;
        $this->nome = $nome;
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * @return Estado
     */
    public function getEstado() {
        return $this->estado;
    }

    /**
     * @param Estado $estado
     */
    public function setEstado($estado) {
        $this->estado = $estado;
    }

}