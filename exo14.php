<h1>Exercice 14</h1>


<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années,
    mois, jours).
</p>


<?php

$born = new DateTime('01/17/1985');
$now = new DateTime('05/21/2018');


// $now = new DateTime(); /* La date d'aujourd'hui = parenthèse vide*/ 


$diff = date_diff($born, $now);


echo $diff->format("Vous avez %Y ans, %m mois et %d jours");