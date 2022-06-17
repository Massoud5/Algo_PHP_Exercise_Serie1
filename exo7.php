<h1>Exercice 7</h1>


<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction 
    de son âge :<br>

    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser<br>
</p>


<?php 
$age = 60;
echo catégorie($age);

function catégorie($age){
   
    if ( 6 <= $age && $age <= 7){
        return "Poussin";
    }
    else if ( 8 <= $age && $age <= 9){
        return "Pupille";
    }
    else if ( 10 <= $age && $age <= 11){
        return "Minime";
    }
    else if ( 12 <= $age && $age <= 17){
        return "Pupille";
    }
    else if ( 18 <= $age && $age <= 30  ){
        return "Cadet";
    }
    else{
        echo "La catégorie n'est pas gérée";
    }

}