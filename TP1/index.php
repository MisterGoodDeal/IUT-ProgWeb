<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accueil - Joueurs de foot</title>
</head>
	<h1>Accueil - Joueurs de foot</h1>
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
