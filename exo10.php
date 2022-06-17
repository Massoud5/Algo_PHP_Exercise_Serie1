<h1>Exercice 10</h1>


<p>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire
    l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets
    de 10 € et 5 €, de pièces de 2 € et 1 €.
</p>


<?php

$sommeAPayer = 152;
$sommeVersee = 200;
$resteApayer = $sommeVersee - $sommeAPayer;


$billet10 = floor($resteApayer / 10);
$resteApayer = $resteApayer - $billet10 * 10;

$billet5 = floor($resteApayer/ 5);
$resteApayer = $resteApayer - $billet5 * 5;

$pièces2 = floor($resteApayer / 2);
$resteApayer = $resteApayer - $pièces2 * 2;

$pièces1 = floor($resteApayer);

echo "Montant à payer : $sommeAPayer<br>";
echo "Montant versé : $sommeVersee<br>";
echo "Reste à payer : $resteApayer<br>";
echo "⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕⁕<br>";
echo "Rendue de monnaie :<br>";
echo "$billet10 billets de 10€ - $billet5 billet de 5€ - $pièces2 pièce de 2€ - 
      $pièces1 pièce de 1€";