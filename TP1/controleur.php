<?php 
include('vue.php');
include('modele.php');

class Controleur {
	public $vue;
	public $modele;
	
	public function __construct() {	
		$this->vue = new Classe();
		$this->modele = new Modele();
	}
	
	function liste() {
		$this->vue->affiche_liste($this->modele->getListe());
	}
	
	function bienvenue() {
		$this->vue->affiche_menu($this->modele->getMenu());
	}
}

?>