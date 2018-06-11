<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/18
 * Time: 08:34
 */
require_once '../modelos/CrudUsuario.php';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = "index";
}

switch ($acao){
    case 'index':
        echo '<pre>';
        $crud = new CrudUsuario();
        $usuarios = $crud->getUsuario();
        include "../view/templates/cabecalho.php";
        include "../view/categorias/index.php";
        include "../view/templates/rodape.php";
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudUsuario();
        $usuario = $crud->getUsuario($id);
        include '../view/templates/cabecalho.php';
        include '../view/categorias/exibir.php';
        include '../view/templates/rodape.php';
        break;
    case 'inserir':
        if (!isset($_POST['inserir'])) {
            include '../view/templates/cabecalho.php';
            include '../view/categorias/inserir.php';
            include '../view/templates/rodape.php';
        }else{
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $cod_tip = $_POST['cod_tip'];
            $novaUsu = new Usuario($nome,$senha,$email,$cod_tip);
            $crud = new CrudUsuario();
            $crud->insertUsuario($novaUsu);
            header('Location: usuarios.php');
        }
        break;
    case 'alterar':
        if (!isset($_POST['gravar'])) {
            $id = $_GET['id'];
            $crud = new CrudUsuario();
            $usuario = $crud->getUsuario($id);
            include '../view/templates/cabecalho.php';
            include '../view/categorias/alterar.php';
            include '../view/templates/rodape.php';
        }else{
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $cod_tip = $_POST['cod_tip'];
            $novaUsu = new Usuario($nome,$senha,$email,$cod_tip);
            $crud = new CrudUsuario();
            $crud->atualizaUsuario($novaUsu,$id);
            header('Location: usuarios.php');
        }
        break;
    case 'excluir':
        $id = $_GET['id'];
        $crud = new CrudUsuario();
        $crud->excluirUsuario($id);
        header('Location: usuarios.php');
        break;
}