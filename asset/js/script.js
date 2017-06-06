$(function()// fonction à mettre à chaque fois que l'on commence du jquery
{
	let idSelect;
	// EVENEMENT CHANGEMENT DE VALEUR 
	$("#id").change(function()
	{
		 idSelect = $("#id").val();     // Avec ".val()" on récupère la valeur de l'id
		//console.log(idSelect);// il faut tjs verifier les varibles et fonctions étape par étape
		if(idSelect == null)
		{
				$('#modif_title').val("");
				$('#modif_description').val("");
				$("#modif_picture").val("");
		}
		else
		{
			$.ajax(
			{
				url:"api.php",// c est ici et cette syntaxe qu'on récupère les données d'une page
				method:"post",
				data:{ id_post:idSelect,type:"Select"},// on met une virgule à la fin au cas où on voudrait ajouter des instructions
				// Coté php - $_POST["id_post"]aura la valeur de IdSelect
				// c'est moi qui choisi la "key"- il correspond au "name" d'un formulaire
			})
			.done(function(data)
				{
					data = JSON.parse(data);
					// j'ai véfifié la fonction avec un console.log('Omar') ou une alert("Omar");
					//$('#modif_title').val('Omar37');
				$('#modif_title').val(data[0].title);
				$('#modif_description').val(data[0].description);
				$("#modif_picture").val(data[0].picture);
				//console.log(data);
		
			});
				
		}
				// On va verifier que le formulaire est bien rempli lorsque on appui sur le bouton\\ 
				// annule les éléments programmés pour revenir à la valeur par défaut
	});                                   
	
		
		
    $("#form_modif_post").submit(function(e) {
        e.preventDefault();
        console.log(idSelect);
        $.ajax({
            url: "api.php",
            method: "POST",
            data: {
                title: $("#modif_title").val(),
                picture: $("#modif_picture").val(),
                description: $("#modif_description").val(),
                category_id: $("#modif_category_id").val(),
                id_post: idSelect,
                type: "Update"
            }
        });
    });

  /* Autre solution : $('#modif_button').on("click", function() 
						{
							event.preventDefault();
							console.log("envoyer");

						});
							*/

	$("#form_sup_post").submit(function(e) {
	        e.preventDefault();
	        console.log(idSelect);
	        $.ajax({
	            url: "api.php",
	            method: "POST",
	            data: {
	                id_post: idSelect,
	                type: "Delete"
	               
	            }
	        });
	    });				
				

});
		

//document.ready 
 // une fonction qui n'a pas de nom est une fonction anonyme
