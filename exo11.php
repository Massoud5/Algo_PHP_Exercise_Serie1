<h1>Exercice 11</h1>


<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant 
    de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par 
    ligne). Il est également demandé <br>d’afficher le nombre de marques de voitures 
    présentes dans le tableau.<br>
    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>


<?php

$marquesDeVoitures = ["Peugeot", "Renault", "BMW", "Mercedes"];

echo "Il y a ".count($marquesDeVoitures)."marques de voitures dans le tableau :<br>";

foreach($marquesDeVoitures as $marque){
    echo "⁜ $marque<br>";
}