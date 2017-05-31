<?php
/*
Créé un Class Entreprise
Propriété (private) :	- Nom (varchar 20)
			- Logo (varchar 255)
			- Rue (varchar 150)
			- Code Postal (varchar 5)
			- Ville (varchar 50)
			- Taille (int 5) -> Nombre d'employe
            - Date de creation (int 4) -> Annee de création
			
Methode (public) :	- Getter/Setter
			- FicheSociete()
			- Comparaison($societe2) -> Compare la Taille et Date
*/

		class entreprise
		{
			private $nom;
			private $logo;
			private $rue;
			private $code_postal;
			private $ville;
			private $taille;
			private $date_creation;

		public function __construct($new_nom,$new_logo,$new_rue,$new_code_postal,$new_ville,$new_taille,$new_date_creation)
		{
			if(strlen($new_nom>20))
			{
				echo " Veuillez ressaisir votre nom";
			}
			if(strlen($new_logo>255))
			{
				echo " logo trop court";
			}
			if(strlen($new_rue>150))
			{
				echo"Veuillez remplir le champs rue";
			}
			if(strlen($new_code_postal<5))
			{
				echo"Veuillez remplir le champs code postal";
			}
			if(strlen($new_ville>50))
			{
				echo"Veuillez remplir le champs ville";
			}
			if(strlen($new_taille<5))
			{
				echo"Veuillez remplir le champs taille";
			}
			if(strlen($new_date_creation<4))
			{
				echo"Veuillez remplir le champs date_creation";
			}
			
			$this->nom=$new_nom;
			$this->logo=$new_logo;
			$this->rue=$new_rue;
			$this->code_postal=$new_code_postal;
			$this->ville=$new_ville;
			$this->taille=$new_taille;
			$this->date_creation=$new_date_creation;
			
		}

		public function FicheSociete()
		{
			echo "Nom : ".$this->nom."<br>";
			echo "Prénom : ".$this->logo."<br>";
			echo "Rue : ".$this->rue."<br>";
			echo "Code postal : ".$this->code_postal."<br>";
			echo "Ville : ".$this->ville."<br>";
			echo "Taille de l'entreprise : ".$this->taille." employé(s)<br>";
			echo "Date de création : ".$this->date_creation."<br>";
			
		}
		// SETTER
			public function setNom()
			{
				$this->nom=$new_nom;
			}

			public function setLogo()
			{
				$this->logo=$new_logo;
			}

			public function setRue()
			{
				$this->rue=$new_rue;
			}

			public function setCode_Postal()
			{
				$this->code_postal=$new_code_postal;
			}

			public function setVille()
			{
				$this->ville=$new_ville;
			}

			public function setTaille()
			{
				$this->taille=$new_taille;
			}

			public function setDate_creation()
			{
				$this->date_creation=$new_date_creation;
			}

			//GETTER

			public function getNom()
			{
				echo"Nom : ".$this->nom."<br>";// le "return" me permet de récupérer la value "$this->nom"
				return $this->nom;
			}

			public function getLogo()
			{
				echo"Le Logo : ".$this->logo."<br>";
				return $this->nom;
			}
			
			
			public function getRue()
			{
				echo"Rue: ".$this->rue."<br>";
				return $this->rue;
			}
			
			
			public function getCode_Postal()
			{
				echo"Code postal: ".$this->code_postal."<br>";
				return $this->code_postal;// le "return" me permet de récupérer la value "$this->code_postal"
			}
			public function getVille()
			{
				echo"Ville: ".$this->ville."<br>";
				return $this->ville;
			}
			
			public function getTaille()
			{
				echo"Taille: ".$this->taille." employé(s)<br>";
				return $this->taille;
			}
			
			public function getDate_Creation()
			{
				echo"Date de creation: ".$this->date_creation."<br>";
				return $this->date_creation;
			}
			
			
		public function comparaison($societe2)
		{
			if($this->taille > $societe2->getTaille())
			{
				echo $this->nom. "a plus de salariés que ".$societe2->getNom();

			}
			elseif($this->taille < $societe2->getTaille())

			{
				echo $societe2->getNom."a plus de salariés que ".$this->nom ;
			}
			elseif($this->taille == $societe2->getTaille())

			{
				echo $this->nom. "a autant de salariés que ".$societe2->getNom();	
			}

			
			if($this->date_creation > $societe2->getDate_Creation())
			{
				echo $this->nom. " est plus jeune que ".$societe2->getNom();

		}
			elseif($this->date_creation < $societe2->getDate_Creation())
			{
				echo $this->nom. " est plus jeune que ".$societe2->getNom();
			}

				elseif($this->date<$societe2->getDate_Creation())
			{
				echo $societe2->getNom(). " est plus jeune que ".$this->Nom();
			}

		}



	}
			
		$omar= new entreprise("Omar","Ohmz","2 rue de la paix",75016,"Paris",1000,2007);
		$omar->FicheSociete();
		$kali =new entreprise("Carlos","Hmz","5 rue de la paix",75017,"Paris",1200,2009);
		$kali->comparaison($omar);
			
			
			
			



		


