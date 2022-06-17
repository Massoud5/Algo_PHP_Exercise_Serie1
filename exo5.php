<h1>Exercice 5</h1>


<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>


<?php

$euroToFranc = 6.55957;
$francs = 100;
$euros = round($francs / $euroToFranc, 2); 
echo $euros;