<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:01
 */

require 'Usuario.php';
require 'DBConnection.php';
class CrudUsuario
{
    private $conexao;

    public function getUsuario()
    {
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from usuario';

        $resultado = $this->conexao->query($sql);
        $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaUsuarios = [];

        foreach ($usuarios as $usuario) {
            $listaUsuarios[] = new Usuario($usuario['cod_usuario'], $usuario['nome'],$usuario['senha'],$usuario['email'],$usuario['cod_tip']);
        }


        return $listaUsuarios;

    }

    public function getUser( int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from usuario WHERE cod_usuario = $id";

        $resultado = $this->conexao->query($sql);
        $usuarios = $resultado->fetch(PDO::FETCH_ASSOC);

        $listaUsuarios[] = new Usuario($usuario['cod_usuario'], $usuario['nome'],$usuario['senha'],$usuario['email'],$usuario['cod_tip']);


        return $listaUsuarios;
    }
    public function insertUsuario(Usuario $usu){
        $this->conexao = DBConnection::getConexao();
        $dados[] = $usu->getCod_usuario();
        $dados[] = $usu->getNome();
        $dados[] = $usu->getSenha();
        $dados[] = $usu->getEmail();
        $dados[] = $usu->getCod_tip();
        $this->conexao->exec("insert into usuario(nome,senha,email,cod_tip) VALUES('$dados[1]','$dados[2]','$dados[3]','$dados[4]')");

    }
    public function atualizaUsuario(Usuario  $usu,int $id){
        $this->conexao = DBConnection::getConexao();
        $dados[] = $usu->getNome();
        $dados[] = $usu->getSenha();
        $dados[] = $usu->getEmail();
        $dados[] = $usu->getCod_tip();
        $sql = "UPDATE usuario SET nome = '$dados[0]',senha = '$dados[1]',email = '$dados[2]',cod_tip = '$dados[3]' WHERE cod_usuario = $id";
        $this->conexao->exec($sql);
    }
    public function excluirUsuario( int $usu){
        $this->conexao = DBConnection::getConexao();
        $sql ="delete from usuario WHERE cod_usuario = $usu";
        $this->conexao->exec($sql);

    }



}





