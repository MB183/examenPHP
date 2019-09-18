<?php

include 'index.phtml';
include 'ArrayManager.php';

$tableauEntier = [20, -15, 8, 250, 77, 16, 29, 33, 100, 55];

$result = new ArrayManager($tableauEntier);
$result->PlusGrandNombreTrouver($tableauEntier);
// echo($result->PlusGrandNombreTrouver($tableauEntier));
echo "<div>".$result->PlusGrandNombreTrouver($tableauEntier)."</div>";

// var_dump($result);
?>

