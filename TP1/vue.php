<?php
class Classe {
	public function __construct() {	
	}
	
	function affiche_liste($array) {
		foreach ($array as $key => $value) {
			echo $value["id"] . ' - ' . $value["nom"] . '<br>';
		}
	}
	
	function affiche_menu($array) {
		foreach ($array as $key => $value) {
			echo $value;
		}
	}


}
?>