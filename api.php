<?php
require'crudd.php';
// créé une instance ==> $variable = new nom_de_la_class
$mydb = new Crud("localhost","root","","projetapp");// création de l'instance $mydb
if(empty ($_POST))
{
	$post=$mydb->read(array('*'),"posts",array("1"=>"1"));	
}
else
{
	$post=$mydb->read(array('*'),"posts",array("id"=>$_POST['id_post']));		
}
echo json_encode($post);


// exécution de la function read(Select)
//var_dump($categorie);
// on traduit le code php en javascript via le json.Affichage du tableau php au format json



