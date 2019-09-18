<?php

class ArrayManager{

	private $_tableau;


	public function __construct($tableauRecuperer){
		$this->_tableau =$tableauRecuperer;
	}

	public function getTableau(){
		$this->_tableau;
	}

	public function setTableau($nouveauTableau){
		return $this->_tableau = $nouveauTableau;
	}

	function PlusGrandNombreTrouver($tableau){
	$nombreCourant;
	$nombrePlusGrand;

	for ($i = 0; $i < count($this->_tableau) ; $i++) { 
		$nombreCourant = $this->_tableau[$i];

		if ($i == 0) {
			$nombrePlusGrand = $nombreCourant;
		}

		if ($nombreCourant > $nombrePlusGrand) {
			$nombrePlusGrand = $nombreCourant;
		}
	}
	return "Plus grand nombre de ce tableau est ".$nombrePlusGrand.".";
	}

}
	
?>