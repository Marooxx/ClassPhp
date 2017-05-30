<!DOCTYPE html>
<html>
<head>
	<title>Formulaire php</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php
	if(!empty($_POST))// GET et POST existeront tjs donc on verifie si les champs sont remplis avec "empty()"
		{
			if(empty($_POST['name']))
			{
				echo " Non vide";
			}
			elseif(empty($_POST['slug']))
			{
				echo 'Slug vide';
			}
			elseif(empty($_POST['image']))
			{
				echo 'Image inexistante';
			}
			else
			{
				require"crudd.php";
			    $mydb = new Crud("localhost", "root", "", "projetapp");
			    $mydb->create($_POST, "categorie");
			      echo '<ul class="list-group">
                    <li class="list-group-item list-group-item-success">Votre catégorie a été ajoutée</li>
                </ul>';


			   
			    
			}


		}

?>
















<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="slug">Slug</label>  
  <div class="col-md-4">
  <input id="slug" name="slug" type="text" placeholder="slug" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>  
  <div class="col-md-4">
  <input id="image" name="image" type="text" placeholder="image" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type">Type</label>
  <div class="col-md-4">
    <select id="type" name="type" class="form-control">
      <option value="category">Catégorie</option>
      <option value="trend">Tendance</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit" id="singlebutton"  class="btn btn-primary">Envoyez</button>
  </div>
</div>
</fieldset>
</form>

</body>
</html>