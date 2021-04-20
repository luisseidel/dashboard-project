<?php


namespace App\Model\Entities;

use App\Model\Cidade as Cidade;
use App\Model\Entities\Pessoa as Pessoa;

class EnderecoPessoa {

    private $id;
    private $endereco;
    private Cidade $cidade;
    private $telefone;
    private Pessoa $pessoa;

    /**
     * EnderecoPessoa constructor.
     * @param $id
     * @param $endereco
     * @param Cidade $cidade
     * @param $telefone
     * @param \App\Model\Entities\Pessoa $pessoa
     */
    public function __construct($id, $endereco, Cidade $cidade, $telefone, \App\Model\Entities\Pessoa $pessoa) {
        $this->id = $id;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
        $this->pessoa = $pessoa;
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
    public function getEndereco() {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    /**
     * @return Cidade
     */
    public function getCidade() {
        return $this->cidade;
    }

    /**
     * @param Cidade $cidade
     */
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getTelefone() {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /**
     * @return \App\Model\Entities\Pessoa
     */
    public function getPessoa() {
        return $this->pessoa;
    }

    /**
     * @param \App\Model\Entities\Pessoa $pessoa
     */
    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }


}