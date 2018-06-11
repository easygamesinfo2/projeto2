<p>Nome: <?= $usuario->getNome()?></p>

<p>Senha:<?= $usuario->getSenha()?> </p>

<p>Email: <?= $usuario->getEmail()?></p>

<p>Cod_tip: <?= $usuario->getCod_tip()?></p>

<a href="usuarios.php?acao=alterar&id=<?= $usuario->getId()?>">Editar</a>
<a href="usuarios.php?acao=excluir&id=<?= $usuario->getId()?>">Excluir</a>