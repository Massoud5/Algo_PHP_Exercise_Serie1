<h1>Exercice 9</h1>


<p>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son 
sexe. Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est
un homme de plus de 20 ans,<br> alors celle-ci est imposable (sinon ce n’est pas le cas, 
« non imposable »).
</p>


<?php


$Age = 40;
$Sexe = "H";
if( $Age >= 18 && $Age <= 35 && $Sexe == "F"){
    echo "Age : $Age<br>";
    echo "Sexe : $Sexe<br>";
    echo "La personne est imposable.";
}
else if( $Age > 20 && $Sexe == "H"){
    echo "Age : $Age<br>";
    echo "Sexe : $Sexe<br>";
    echo "La personne est imposable.";
}
else{
    echo "La personne est non imposable.";
}