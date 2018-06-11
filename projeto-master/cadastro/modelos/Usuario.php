<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 15:40
 */

class Usuario
{
    private $cod_usuario;
    private $nome;
    private $senha;
    private $email;
    private $cod_tip;

    public function __construct($cod_usuario = null,$nome = null,$senha = null,$email = null,$cod_tip = null)
    {
        $this->cod_usuario = $cod_usuario;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->cod_tip = $cod_tip;


    }

    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCod_tip()
    {
        return $this->cod_tip;
    }
}