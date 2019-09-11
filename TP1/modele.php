<?php


class Modele extends Connexion {
	
	private $db;
	
	public function __construct() {	
		$this->db = new Connexion();
		$this->db->initConnexion();
	}
	
	function getListe() {
		return array ( array("id"=>1, "nom"=>"Zidane"), array("id"=>2, "nom"=> "Henry"), array("id"=>3, "nom"=>"Mbappé"), array("id"=>4, "nom"=>"Rami" ));
	}
	
	function getMenu() {
		return array('<p><a href="index.php?action=bienvenue">Page d\'accueil</a></p>', '<p><a href="index.php?action=liste">Liste de joueurs</a></p>');
	}
}

class Connexion {
	static protected $bdd;
	
	public function __construct() {
	}
	
	public static function initConnexion() {
		self::$bdd = mysqli_connect("database-etudiants.iut.univ-paris8.fr", "dutinfopw20163", "dasedase", "dutinfopw20163");
	}
}