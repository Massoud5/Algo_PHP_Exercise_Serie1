<h1>Exercice 15</h1>


<p>
    Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;<br>
</p>


<?php


 
class Personne 
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateDeNaissance;

    public function __construct($nom, $prenom, $dateDeNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = new DateTime($dateDeNaissance);
    }

    public function getNom(){
        return $this ->_nom;
    }
    public function getPrenom(){
      return  $this ->_prenom;
    }
    public function getDateDeNaissance(){
       return $this ->_dateDeNaissance;
    }
    public function getAge(){
        $now = new DateTime;
        $diff = date_diff($this ->_dateDeNaissance, $now);
        $age = $diff->format("a %Y ans");
        return $age;
    }

    public function setNom($nom){
        $this ->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this ->_prenom = $prenom;
    }
    public function setDateDeNaissance($dateDeNaissance){
        $this ->_dateDeNaissance = $dateDeNaissance;
    }
  

    public function __toString(){
        return $this -> _prenom." ".$this -> _nom." ".$this->getAge()."<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
 
echo $p1;
echo $p2;