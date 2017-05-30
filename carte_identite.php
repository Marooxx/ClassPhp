<?php
/*
Enoncé:
Un Class Humain 
	Proprietes : 	- Nom (20 caractere)
					- Prenom (20 caractere)
					- Age
					- Sexe
	
	Methode :	- carteDidentite()
				- modifierNom($new_nom)=setNom($new_nom)-- setter = modifier
				- modifierPrenom($new_prenom)
				- modifierAge($new_age)
				- modifierSexe($new_sexe)
				- afficherNom()==getNom()-- getter = afficher
				- afficherPrenom()
				- afficherAge()
				- afficherSexe()
*/
/*
get siginifie modifier
set signifie afficher
*/
class humain
	{
	// 1ere étape est de crée les propriétés
		private $nom;
		private $prenom;
		private $age;
		private $sexe;


		// 2e étape crée chacune des fonctions
	public function __construct($new_nom,$new_prenom,$new_age,$new_sexe)
		{
			if(strlen($new_nom>20))
			{
				echo " Veuillez ressaisir votre nom";
			}	
			$this->nom=$new_nom;
			$this->prenom=$new_prenom;
			$this->age=$new_age;
			$this->sexe=$new_sexe;
			

		}
	

	public function carteDidentite()
		{
			echo "Nom : ".$this->nom."<br>";
			echo "Prénom : ".$this->prenom."<br>";
			echo "Age : ".$this->age."<br>";
			echo "Sexe : ".$this->sexe."<br>";
		}
			
			

	public function modifierNom($new_nom)// on peut aussi écrire setNom($new_nom)
		{
			$this->nom=$new_nom;

		}

		public function modifierPrenom($new_prenom)
		{	
			$this->prenom=$new_prenom;

		}

		public function modifierAge($new_age)
		{
			$this->age=$new_age;
		}
		
		public function modifierSexe($new_sexe)
		{
			
				$this->sexe=$new_sexe;
				
			
		}

		public function getNom()
		{
			echo"Nom : ".$this->nom."<br>";
		}

		public function getPrenom()
		{
			echo"Prenom : ".$this->prenom."<br>";
		}
		
		public function getAge()
		{
			echo"Age: ".$this->age."<br>";
		}
		
		public function getSexe()
		{
			echo"Age: ".$this->sexe."<br>";
		}
		

		
	}

	$omar= new humain("hamzi","omar",37,"male");
	$omar->carteDidentite();
