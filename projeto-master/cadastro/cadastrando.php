<!DOCTYPE html>
<html>
<head>
	<title>cadastrando...</title>
</head>
<body>

	<?php 
	
	$conexao = new PDO("mysql:host=localhost;dbname=cadastro", "root", "root");
	
?>



<?php 
	print_r($_POST);
	$nome      = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email     = $_POST["email"];
	$senha     = $_POST["senha"];
	$confirma  = $_POST["confirma"];
	$sql       = $conexao->query("INSERT INTO usuarios(nome, sobrenome, email, senha, confirma) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$confirma' )");
	echo "<center><h1>Cadastro efetuado com sucesso</h1></center>";
?>

</body>
</html>
