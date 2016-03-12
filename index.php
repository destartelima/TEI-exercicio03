<?php
require('HTML/Option.php');
require('HTML/Select.php');

use \HTML\Option;
use \HTML\Select;

$select = new Select('cd');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Seleção de CDs</title>
</head>
<body>
	<h1>Seleção de CDs</h1>
	<form action="destino.php" method="POST">
		<p>Selecione um CD: <br><?=$select?></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
</body>
</html>