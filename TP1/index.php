<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Liste joueur de foot</title>
</head>
	<h1>Liste des joueurs</h1>
	<?php
	include('controleur.php');
	$controleur = new Controleur();
	if (!isset($_GET["action"]))
		$codeAction = "bienvenue";
	else
		$codeAction = htmlspecialchars($_GET["action"]);
	
	if ($codeAction == "bienvenue")
		$controleur->bienvenue();
	else if ($codeAction == "liste")
		$controleur->liste();
	?>
<body>
</body>
</html>
