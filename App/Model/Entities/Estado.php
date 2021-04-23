<?php


namespace App\Model\Entities;

use App\Model\Entities\Pais as Pais;

class Estado {

    private $id;
    private $nome;
    private $sigla;
    private Pais $pais;

    /**
     * Estado constructor.
     * @param $id
     * @param $nome
     * @param $sigla
     * @param Pais $pais
     */
    public function __construct($id, $nome, $sigla, Pais $pais) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
        $this->pais = $pais;
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
     * @return mixed
     */
    public function getSigla() {
        return $this->sigla;
    }

    /**
     * @param mixed $sigla
     */
    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    /**
     * @return Pais
     */
    public function getPais() {
        return $this->pais;
    }

    /**
     * @param Pais $pais
     */
    public function setPais($pais) {
        $this->pais = $pais;
    }

}