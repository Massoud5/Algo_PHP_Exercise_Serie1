<h1>Exercice 6</h1>


<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir 
    de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. 
    Ex : 20 % -> 0.2)
</p>


<?php

$prixUnitaire = 9.99;
$quantité = 5;
$TVA = 0.2;

$TH = ($prixUnitaire * $quantité) * (1 + $TVA);

echo $TH;
