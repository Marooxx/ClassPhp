<?php

	public function getTaille(){
    	return $this->taille;
    }
    
	public function getDate(){
    	return $this->date;
    }
    
	public function getNom(){
    	return $this->nom;
    }

	public function comparaison($societe2){
    	if($this->taille > $societe2->getTaille()){
        	echo $this->nom." a plus de salarier que ";
            echo $societe2->getNom();
        }elseif($this->taille < $societe2->getTaille()){
        	echo $this->nom." a moins de salarier que ";
            echo $societe2->getNom();
        }else{
        	echo $this->nom." a autant de salarier que ";
            echo $societe2->getNom();
        }
    	if($this->date > $societe2->getDate()){
        	echo $this->nom." est plus jeune que ";
            echo $societe2->getNom();
        }elseif($this->date < $societe2->getDate()){
        	echo $this->nom." est plus ancienne que ";
            echo $societe2->getNom();
        }else{
        	echo $this->date." identique que ";
            echo $societe2->getNom();
        }
    }



/*Créé un Class Entreprise
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