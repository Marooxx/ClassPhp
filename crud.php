<?php
//*********Conventions*************\\
/*
+ "class" = objet et commence tjs par une majuscule

+ "Propriété" = variable et est tjs en minuscule(ex: public $donnee_a_enregistrer)

+ "Fonction" = méthode et s'écrit avec en camelCase (ex: public function allezAuPark())

+ "public" qui est utilisable partout à l'intérieur de la class et dans les instances

+ "private" est utilisable UNIQUEMENT dans la class

+ "instance" correspond au "new" de la class(nous affectons les variables et les fonctions public à notre variable) mais elle n'aura pas 
	accès au "private"

+ Pour faire appelle à une variable ou fonction, nous "aiguillons" grâce à une "->" vers les ressources(variables et fonctions)

+ la class sert à ne pas réutiliser du  code à chaque fois 

*/	





class crud // Create-Read-Update-Delete// 
	{
	public $table;
	private $database;
	private $user;
	private $password;
	private $host; 
	private $mysqli; 

//fonction est dans une class et la method dans une class

	//public function connect($newHost,$newUser,$newPassword,$newDatabase)// fonction pour se connecter à la base de donnéé
	// Le "__construct" est appelé lors de la création d'une nouvelle instance AUTOMATIQUEMENT
		public function __construct($newHost,$newUser,$newPassword,$newDatabase)
		{
		// $this permet d'utiliser les variables en dehors de la fonction.
			$this->host=$newHost;
			$this->user=$newUser;
			$this->database=$newDatabase;
			$this->password=$newPassword;
			$this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
			//echo"banana";

		}



	public function create($newTable,$champs)
		{	$create="";

				//********INSERT**********\\
			
			$insert="";
			foreach($champs as $key=>$value)
			{	
				$insert.=$key.","; // ou $select = $select.$indice.',';// Concaténation de la chaine de caractère $select avec','
				
			}
			$insert=rtrim($select,',');

			    //******* VALEUR*********\\
			$data="";// init variable where
			foreach($champs as $key=>$value)
			{
				$data.= "'".$value."',"; // ou $where = $where.$indice.',';
				
			}
			$data=rtrim($where,",");

			 $result = $this->mysqli->query("INSERT INTO ".$newTable." (".$insert.") VALUES (".$data.")");
				
		}
			






			

	
	
	public function read($champs,$newTable,$condition)
		{	/******** SELECT***********/
			$select="";//init variable select
			foreach($champs as $indice)// boucle sur l'array
			{	
				$select.=$indice.","; // ou $select = $select.$indice.',';// Concaténation de la chaine de caractère $select avec','
				
			}
			$select=trim($select,',');// Suppression du dernier caractère ici la virgule ","
				//echo "SELECT " .$select ." FROM ".$newTable;
			
			
			/*************WHERE*************************/

			$where="";// init variable where
			foreach($condition as $key=>$value)
			{
				$where.=$key." = '".$value."' AND "; // ou $where = $where.$indice.',';
				
			}
			$where=rtrim($where," AND ");
				//echo "SELECT " .$select ." FROM ".$newTable;
			

			$resultat = $this->mysqli->query("SELECT " .$select ." FROM ".$newTable." WHERE ".$where);
			$tab = $resultat->fetch_all(MYSQLI_ASSOC);
			return $tab;
			
			
			

			
		}
			
			


	
	public function update($newTable,$condition,$champs)
		{
			$where="";// init variable where
			foreach($condition as $key=>$value)
			{
				$where.=$key." = '".$value."' AND "; // ou $where = $where.$indice.',';
				
			}
			$where=rtrim($where," AND ");
				//echo "SELECT " .$select ." FROM ".$newTable;
			

				$set="";// init variable where
			foreach($champs as $key=>$value)
			{
				$set .=$key." = '" .$value. "',";
			}
				$set=rtrim($set,",");




			$resultat = $this->mysqli->query(" UPDATE ".$newTable." SET ".$set. " WHERE ".$where);

		}








	
	public function delete($newTable,$condition)
		{
			/************** WHERE***********************/
				$where="";// init variable where
			foreach($condition as $key=>$value)
			{
				$where.=$key." = '".$value."' AND "; // ou $select = $select.$indice.',';
				
			}
			$where=rtrim($where," AND ");
				//echo "SELECT " .$select ." FROM ".$newTable;


			$resultat = $this->mysqli->query(" DELETE FROM ".$newTable." WHERE ".$where);
			

		}
		// le "__destruct" est appele à chaque fin de code
		function __destruct()
		{
			$this->mysqli->close();// on referme la connexion à la BDD
			//echo " fini banana";
		}

}









 $mydb = new Crud("localhost", "root", "", "projetapp");//-- apres la création de la fonction __construct, on peut y mettre les paramètres de connexion, la fonction appelée au lancement
    //$test->connect("localhost", "root", "", "entreprise");//connexion-- on la retire une fois que la fonction construct a été crée

   /* $leTableau= $test->delete("employes",array("nom"=>"Gallet"));// delete

    $leTableau = $test->read(array("nom", "prenom"), "employes", array("nom"=>"Gallet"));//read
    

    var_dump($leTableau);*/

    $data=array('name'=>'politics','slug'=>'politics','image'=>'test.jpg');
    $mydb->create($data,"category");
