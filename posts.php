<?php
  require"gestion_posts.php";// on met le require au dessus pour recuperer les categories
  $mydb = new Post("localhost", "root", "", "projetapp");
  $post = new Post("localhost", "root", "", "projetapp",2);
  
?>

<html>
<head>
  <title>Formulaire posts</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<?php
  if(!empty($_POST))// GET et POST existeront tjs donc on verifie si les champs sont remplis avec "empty()"
    {
      if(empty($_POST['description']))
      {
        echo " pas de description";
      }
      elseif(empty($_POST['title']))
      {
        echo 'champs vide';
      }
      elseif(empty($_POST['picture']))
      {
        echo 'Image inexistante';
      }
      else
      {
      
          
          $mydb->create($_POST, "posts");
            echo '<ul class="list-group">
                    <li class="list-group-item list-group-item-success">Un article a été ajouté</li>
                </ul>';


         
          
      }


    }

?>
<!-- FORMULAIRE SUPPRIMER-->

<form class="form-horizontal" id="form_sup_post" method="post">
<fieldset>

<!-- Form Name -->
<legend >Supprimer posts</legend>
 <div >
    <select  id="id" name="id" class="form-control">
    <option value="null">Selectionner un post</option>
    <?php
    $category = $mydb->read(array("id","title"),"posts",array("1"=>"1"));// on crée une condition tjs vraie car on a besoin d'une condition
    foreach($category as $key=>$value)
    echo '<option value="    '.$value["id"].'      ">   '.$value["title"].'     </option>';
    
                 


    ?>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div><br>






<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Valider</label>
  <div class="col-md-4">
    <button type="submit" id="modif_button" name="" class="btn btn-primary">Envoyez</button>
  </div>
</div>

</fieldset>
</form>





<!-- FORMULAIRE MODIFIER-->
<form class="form-horizontal" id="form_modif_post" method="post">
<fieldset>

<!-- Form Name -->
<legend >Modifier posts</legend>
 <div >
    <select  id="id" name="id" class="form-control">
    <option value="null">Selectionner un post</option>
    <?php
    $category = $mydb->read(array("id","title"),"posts",array("1"=>"1"));// on crée une condition tjs vraie car on a besoin d'une condition
    foreach($category as $key=>$value)
    echo '<option value="    '.$value["id"].'      ">   '.$value["title"].'     </option>';
    
                 


    ?>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div><br>

<!-- Description -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control col-md-5" id="modif_description" name="description"><?= $post->description ?></textarea>
  </div>
</div>

<!-- Title -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="modif_title" name="title"><?= $post->title ?></textarea>
  </div>
</div>

<!-- Category -->
<div class="form-group">
  <label class="col-md-4 control-label" for="category_id">Categories</label>
  <div class="col-md-4">
    <select id="modif_category_id" name="category_id" class="form-control">
    <?php
    $category = $mydb->read(array("id","name"),"categorie",array("1"=>"1"));// on crée une condition tjs vraie car on a besoin d'une condition
    foreach($category as $key=>$value)
    echo '<option value="    '.$value["id"].'      ">   '.$value["name"].'     </option>';
    
                 


    ?>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Picture-->
<div class="form-group">
  <label class="col-md-4 control-label" for="picture">Picture</label>  
  <div class="col-md-4">
  <input id="modif_picture" name="picture" type="text" placeholder="" class="form-control input-md" value=<?= $post->title ?> required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Valider</label>
  <div class="col-md-4">
    <button type="submit" id="modif_button" name="" class="btn btn-primary">Envoyez</button>
  </div>
</div>

</fieldset>
</form>














<!-- FORMULAIRE Ajouter-->

<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend >Ajouter posts</legend>

<!-- Description -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
</div>

<!-- Title -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title" name="title"></textarea>
  </div>
</div>

<!-- Category -->
<div class="form-group">
  <label class="col-md-4 control-label" for="category_id">Categories</label>
  <div class="col-md-4">
    <select id="category_id" name="category_id" class="form-control">
    <?php
    $category = $mydb->read(array("id","name"),"categorie",array("1"=>"1"));// on crée une condition tjs vraie car on a besoin d'une condition
    foreach($category as $key=>$value)
    echo '<option value="    '.$value["id"].'      ">   '.$value["name"].'     </option>';
    
                 


    ?>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Picture-->
<div class="form-group">
  <label class="col-md-4 control-label" for="picture">Picture</label>  
  <div class="col-md-4">
  <input id="picture" name="picture" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Valider</label>
  <div class="col-md-4">
    <button type="submit" id="" name="" class="btn btn-primary">Envoyez</button>
  </div>
</div>

</fieldset>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="asset/js/script.js"></script>
 
</body>
</html>


