<?php 

	require_once "modelos/crud_noticia.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
</head>
<body>
	
	<h1>noticias</h1>
	<?php

	$crud = new crud_noticia();
    $noticias = $crud->get_noticias();

	 foreach ($noticias as $noticia): ?>
        <tr>
            <td></a><?= $noticia->getId() ?></td>
            <td></a><?= $noticia->getTitulo() ?></td>
            <td></a><?= $noticia->getDescricao() ?></td>
        </tr>

<?php endforeach;?>

</body>
</html>

