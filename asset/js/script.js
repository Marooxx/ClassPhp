$(function()// fonction à mettre à chaque fois que l'on commence du jquery
{
	
	$("#id").change(function()
	{
		let idSelect = $("#id").val();            // Avec ".val()" on récupère la valeur de l'id
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
				data:{ id_post:idSelect },// on met une virgule à la fin au cas où on voudrait ajouter des instructions
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
				console.log(data);
		
			});
				
		}
				

	});                                   

});
				
				

		

//document.ready 
 // une fonction qui n'a pas de nom est une fonction anonyme
