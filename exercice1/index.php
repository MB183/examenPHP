<?php

include 'index.phtml';

$tableauEntier = [20, -15, 8, 250, 77, 16, 29, 33, 100, 55];

function PlusGrandNombreTrouver($tableau){
	$nombreCourant;
	$nombrePlusGrand;

	for ($i = 0; $i < count($tableau) ; $i++) { 
		$nombreCourant = $tableau[$i];

		if ($i == 0) {
			$nombrePlusGrand = $nombreCourant;
		}

		if ($nombreCourant > $nombrePlusGrand) {
			$nombrePlusGrand = $nombreCourant;
		}
	}
	return "Plus grand nombre de ce tableau est ".$nombrePlusGrand.".";
}

$result = PlusGrandNombreTrouver($tableauEntier);
echo "<div>".$result."</div>";
?>
