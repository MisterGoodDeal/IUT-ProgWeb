<?php
class Modele {
	
	public function __construct() {	
	}
	
	function getListe() {
		return array ( array("id"=>1, "nom"=>"Zidane"), array("id"=>2, "nom"=> "Henry"), array("id"=>3, "nom"=>"Mbappé"), array("id"=>4, "nom"=>"Rami" ));
	}
	
	function getMenu() {
		return array('<p><a href="index.php?action=bienvenue">Page d\'accueil</a></p>', '<p><a href="index.php?action=liste">Liste de joueurs</a></p>');
	}
}