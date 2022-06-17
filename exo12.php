<h1>Exercice 12</h1>


<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue
associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes<br> dans
leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
<br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG

</p>


<?php

$tableau = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach($tableau as $prenom => $valeur){

    if ($valeur == "FRA"){
        echo "Salut $prenom <br>";
    }
    else if ($valeur == "ESP"){
        echo "Holla $prenom <br>";
    }
    else {
        echo "Hello $prenom <br>";
    }
};