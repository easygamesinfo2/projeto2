<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:52
 */

require "noticia.php";
require "DBconnection.php";

class crud_noticia
{
    private $conexao;

    public function get_noticias()
    {
        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from noticia';
        $resultado = $this->conexao->query($sql);
        $noticias = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $lista_noticias = [];

        foreach ($noticias as $noticia){

            $lista_noticias[] = new noticia($noticia['cod_noticia'], $noticia['titulo_da_noticia'], $noticia['descricao']);

        }

        return $lista_noticias;



    }

    public function get_noticia( int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from noticia where cod_noticia = $id';
        $resultado = $this->conexao->query($sql);
        $noticias = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $lista_noticias[] = new noticia($noticias['cod_noticia'], $noticias['titulo_da_noticia']);

        return $lista_noticias;
    }

    public function insert_noticia(noticia $not)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $not->getId();
        $dados[] = $not->getTitulo();
        $dados[] = $not->getDescricao();
        $this->conexao->exec("insert into noticia(titulo_da_noticia,descricao) values('$dados[0]','$dados[1]')");
    }

    public function atualiza_noticia(noticia $not, $id)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $not->getId();
        $dados[] = $not->getTitulo();
        $dados[] = $not->getDescricao();
        $sql = "update noticia set titulo_da_noticia = '$dados[0]', descricao = '$dados[1]' WHERE cod_noticia = $id";
        $this->conexao->exec($sql);

    }

    public function excluir_noticia( int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from noticia where cod_noticia = $id";
        $this->conexao->exec($sql);
    }


}



