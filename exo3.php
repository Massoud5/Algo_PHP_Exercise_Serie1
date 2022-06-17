<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
     « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<?php

$temps1 = "aujourd'hui";
$phrase = "Notre formation DL commence $temps1";
echo $phrase."<br>";
$temps2 = "demain";
echo str_replace($temps1, $temps2, $phrase);
