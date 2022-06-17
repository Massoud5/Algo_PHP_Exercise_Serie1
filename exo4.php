<h1>Exercice 4</h1>


<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>


<?php

$phrase = "Engage le jeu que je le gagne";
$phraseNoSpace = str_replace(" ", "", $phrase);
$phraseLower = strtolower($phraseNoSpace);
$phraseInverse = strrev($phraseLower);

// $test = strrev(str_replace(" ", "", strtolower($phrase)));


if ($phraseLower == $phraseInverse){
    echo "La phrase est plindrome<br>";
    echo $phrase."<br>";
    echo $phraseInverse."<br>";
}else{
    echo "La phrase n'est pas plindrome<br>";
}