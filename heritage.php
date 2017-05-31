<?php

class Animal
{
	public $nom="aigle";
	public $prenom ="royal";
	public $specific=" griffer";


	public function deplacement($type)
	{
		echo " je suis  ".$this->nom.$this->prenom. " et me deplace en ". $type;
	}

	
	public function courir($courir)
	{
		echo " je suis un ".$this->nom. " je me peut ".$courir;
	}
	
	public function crier ($crier)
	{
		echo " je suis un ".$this->nom.$this->prenom." je sais ".$crier;
	}

	public function specification()
	{
		echo " je peut " . $this->specific;
	}


}



class Aigle	extends Animal// "extends" permet de récupérer les propriétés et methodes "public" de la class Animal
{
	public $type="vol";

}

$royal= new Aigle();
$royal->deplacement($royal->type);


class Poisson extends Animal
{
	public $atout = "perd la mémoire rapidement";
}

$poisson = new Poisson();
$poisson->nom="Jiro";
$poisson->specification();

