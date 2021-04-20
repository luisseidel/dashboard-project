<?php


namespace App\Model\Entities;


class Pais {

    private $id;
    private $nome;
    private $sigla;
    private $ddi;

    /**
     * Pais constructor.
     * @param $id
     * @param $nome
     * @param $sigla
     * @param $ddi
     */
    public function __construct($id, $nome, $sigla, $ddi) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
        $this->ddi = $ddi;
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
     * @return mixed
     */
    public function getDdi() {
        return $this->ddi;
    }

    /**
     * @param mixed $ddi
     */
    public function setDdi($ddi) {
        $this->ddi = $ddi;
    }
}