<h1>Exercice 8</h1>


<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en 
    paramètre sous la
    forme :
</p>


<?php

$nombre = 5;

echo "<h3>For loop</h3>";

for ($i = 1; $i <= 10; $i++){
    $tableau1 = "$i x $nombre1 = ".($i * $nombre1)."<br>";
    echo $tableau1;
}

echo "<h3>While</h3>";

$i = 1;
while ($i <= 10){
    $tableau1 = "$i x $nombre1 = ".($i * $nombre1)."<br>";
    $i++;
    echo $tableau1;
}

echo "<h3>Foreach</h3>";

foreach(range(1, 10) as $valeur){
    $tableau1 = "$valeur x $nombre1 = ".($valeur * $nombre1)."<br>";
    echo $tableau1;
}