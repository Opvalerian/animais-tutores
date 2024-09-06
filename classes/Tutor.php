<?php

class Tutor
{
    // Declaração de atributos
    private $id, $nome, $telefone, $endereco;
    
    // Método construtor
    public function __construct($nome, $telefone, $endereco)
    {
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEndereco($endereco);
    }

    // Setters
    public function setId($id)
    {
        if(empty($id))
        {
            throw new Exception("Dado inválido");
        } else {
            $this->id = $id;
        }
    }
    public function setNome($nome)
    {
        if(empty($nome))
        {
            throw new Exception("Dado inválido");
        } else {
            $this->nome = $nome;
        }
    }
    public function setTelefone($telefone)
    {
        if(empty($telefone))
        {
            throw new Exception("Dado inválido");
        } else {
            $this->telefone = $telefone;
        }
    }
    public function setEndereco($endereco)
    {
        if(empty($endereco))
        {
            throw new Exception("Dado inválido");
        } else {
            $this->endereco = $endereco;
        }
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
}

