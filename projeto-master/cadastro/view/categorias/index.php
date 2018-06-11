<a href="usuarios.php?acao=inserir">Inserir Usuario</a>
<h1>Usuarios</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Nome</th>
        </tr>

<?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td></a><?= $usuario->getCod_usuario() ?></td>
            <td><a href="usuarios.php?acao=exibir&id=<?=$usuario->getCod_usuario()?>"><?= $usuario->getNome() ?></a></td>
        </tr>
<?php endforeach;?>
    </table>

