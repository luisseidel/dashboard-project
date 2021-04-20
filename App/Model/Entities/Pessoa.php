<?php


namespace App\Model\Entities;

use App\Model\Entities\EnderecoPessoa as EnderecoPessoa;

class Pessoa {

    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $documento;
    private EnderecoPessoa $enderecoPessoa;

    /**
     * Pessoa constructor.
     * @param $id
     * @param $nome
     * @param $telefone
     * @param $email
     * @param $documento
     * @param \App\Model\Entities\EnderecoPessoa $enderecoPessoa
     */
    public function __construct($id, $nome, $telefone, $email, $documento, \App\Model\Entities\EnderecoPessoa $enderecoPessoa) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->documento = $documento;
        $this->enderecoPessoa = $enderecoPessoa;
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
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDocumento() {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    /**
     * @return \App\Model\Entities\EnderecoPessoa
     */
    public function getEnderecoPessoa() {
        return $this->enderecoPessoa;
    }

    /**
     * @param \App\Model\Entities\EnderecoPessoa $enderecoPessoa
     */
    public function setEnderecoPessoa($enderecoPessoa) {
        $this->enderecoPessoa = $enderecoPessoa;
    }

}