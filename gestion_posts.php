<?php
require "crudd.php";


class Post extends Crud
{
	public $id;
	public $title;
	public $picture;
	public $shares;
	public $comments;
	public $likes;
	public $liked;
	public $description;
	public $date_create;

	/* constructeur-> id par defaut null. Si une valeur est entrée, c'est qu'une modification ou une suppression est prévue sur le post
	sinon c'est qu'un affichage des tous les posts ou la creation d'un post est prévu
	*/
	function __construct($newHost, $newUser, $newPassword, $newDatabase,$id=null)// __construct est toujours public
		{
		parent::__construct($newHost, $newUser, $newPassword, $newDatabase);
		// avec $id=null , il veut  lire tous les posts ou creer un id 
		// avec parent::__construct($newHost, $newUser, $newPassword, $newDatabase) on se connecte à la BDD avec crudd et au fonctionnalité de construct de crudd. Pour se connecter à une fonction parent , il faut qu'elle porte le même nom que la nouvelle
	$this->table="posts";
	if($id!=null)

		{
		
		$data=$this->read(array("*"),$this->table,array("id"=>$id));
		$this->read(array("*"),$this->table,array("id"=>$id));
		$this->id= $data[0]['id'];
		$this->title=$data[0]['title'];
		$this->picture=$data[0]['picture'];
		$this->share=$data[0]['share'];
		$this->comment=$data[0]['comment'];
		$this->likes=$data[0]['likes'];
		$this->liked=$data[0]['liked'];
		$this->description=$data[0]['description'];
		$this->date_create=$data[0]['date_create'];
		var_dump($data);

		}

	}

	public function updateShares()
		{
			$this->replace(array("share"=>$this->share+1),$this->table,array("id"=>$this->id));
		}
	
	public function updateComment()
		{
			$this->replace(array("comment"=>$this->comment+1),$this->table,array("id"=>$this->id));
		}
	
	
	public function updateLike()
		{
			$this->replace(array("likes"=>0),$this->table,array("id"=>$this->id));
		}
	
	public function updateLiked()
		{
			$this->replace(array("liked"=>0),$this->table,array("id"=>$this->id));
		}



}