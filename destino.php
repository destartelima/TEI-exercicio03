<?php

require('HTML/Select.php');
require('HTML/Option.php');

use \HTML\Select;
use \HTML\Option;

$select = new Select('cd');

$id = $_POST['cd'];
$titulo = $select->options[$id]->label;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Seleção de CDs</title>
</head>
<body>
	<h1>Seleção de CDs</h1>
	<h2>CD SELECIONADO</h2>
	<ul>
		<li>Id do CD: <?=$id?></li>
		<li>Título do CD: <?=$titulo?></li>
	</ul>
	<p><a href="index.php">Voltar ao Index</a></p>
</body>
</html>