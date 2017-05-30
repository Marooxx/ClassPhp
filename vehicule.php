<!--Exemple d'objet :
Paramètres:               Fonctionnalités: ce qu'on voudra faire constamment

modele						-Avancer 
marque						 - Reculer
nbre de portes 
années-->

<?php
//************Enoncé : On va crée un véhicule************//

// un objet permet de stocker des paramètres et fonctions. 
class vehicule
{// une class contient variables et fonctions pour la structurer et être utilisable
	// les class peuvent être private et peut être utilisées que dans la classe
	private $modele;
	private $marque;
	private $portes;
	private $annee;
	private $km = 0;// on iniatilise à zéro pour avoir une valeur par défaut;
	// lorsque je mets en private , la variable ne pourra être modifier que dans la class par ses fonctions
	public $couleur;

	// fonction public peut être utilisée en dehors de la classe
	public function creationVehicule($newModele,$newMarque,$newPortes,$newAnnee,$newCouleur)
		{
			$modele = $newModele;
			$this->modele=$newModele;
			$this->marque=$newMarque;
			$this->portes=$newPortes;
			$this->annee=$newAnnee;
			$this->couleur=$newCouleur;
		

		}	
//$this = la classe lorsque l'on est dans une classe autrement il s'agit de la fonction
	public function avancer($distance)
		{
			$this->km += $distance;
		// on peut aussi l'écrire $this->km = $distance + $this->km
		}

	public function reculer($distance)
		{
			$this->km -= $distance;// ou  $this->km = $distance - $this->km ;
		}
	public function carteGrise()
		{	
		// on va afficher toutes les infos du véhicule
			echo "Modele : ".$this->modele."<br>";
			echo "Marque : ".$this->marque."<br>";
			echo "Nombres de porte : ".$this->portes."<br>";
			echo "Année de création : ".$this->annee."<br>";
			echo "Couleur : ".$this->couleur."<br>";
			echo "Kilometrage(s) : ".$this->km." km <br>";
			

		}
	}

	$auditt = new vehicule();// avec le "new" on crée un nouvel objet ou nouvelle instance
	// dans la variable $auditt , on va stocker tous les paramètres précédents.
	
	$auditt->creationVehicule("TT","Audi",3,2007,"Grise");//ici on crée le véhicule
	$auditt->avancer(10);
	$auditt->carteGrise();
	echo"<br>";

	// EXERCICE : Créer une Renault Megane et la faire avancer à la même distance que l'Audi TT.

	$megan = new vehicule;
	$megan->creationVehicule('Megan','Renault',5,2010,'Noire');
	$megan->avancer(10);
	$megan->carteGrise();





