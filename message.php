<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Messages</title>
</head>

<body>
	<h1>Message</h1>
	<?php 
	$tableauMessages = array("1" => "Je suis le message n°1", "2" => "Et moi le message n°2", "3" => "Et moi je suis le dernier message");
	
	if (isset($_GET["id"])) {
		$idMessage = htmlspecialchars($_GET["id"]);
		echo $tableauMessages["$idMessage"];
	} else if (isset($_GET["message"])) {
		$idMessage = htmlspecialchars($_GET["message"]);
		echo $tableauMessages["$idMessage"];
	}
	?>
</body>
</html>