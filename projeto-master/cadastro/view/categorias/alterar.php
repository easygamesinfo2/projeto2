<h2>Alterar Usuario</h2>

<form method="post" action="usuarios.php?acao=alterar">

    <label for="nome">Nome</label>
    <input type="hidden" name="id" value="<?= $usuario->getCod_usuario()?>">
    <input type="text" name="nome" id="nome" value="<?=$usuario->getNome()?>">
    <br>
    <label for="senha">Senha</label>
    <input type="hidden" name="id" value="<?= $usuario->getCod_usuario()?>">
    <input type="password" name="senha" id="senha" value="<?=$usuario->getSenha()?>">
    <br>
    <label for="email">Email</label>
    <input type="hidden" name="id" value="<?= $usuario->getCod_usuario()?>">
    <input type="text" name="email" id="email" value="<?=$usuario->getEmail()?>">
    <br>
    <label for="cod_tip">Cod_tip</label>
    <input type="hidden" name="id" value="<?= $usuario->getCod_usuario()?>">
    <input type="text" name="cod_tip" id="cod_tip" value="<?=$usuario->getCod_tip()?>">
    <input type="submit" name="gravar" value="Gravar"/>



</form>