function verifa()
{
	var reference=document.getElementById('reference').value;
	var id_produit=document.getElementById('id_produit').value;
	var dateDebut=document.getElementById('dateDebut').value;
	var dateFin=document.getElementById('dateFin').value;
			
		var pourcentage=document.getElementById('pourcentage').value;
		
	
	if(id_produit.length==0)
	{
		alert("id_produit diff de 0");
		return false;
	}

if(dateDebut.length==0)
	{
		alert("dateDebut doit être non vide");
		return false;
	}


if(dateFin.length==0)
	{
		alert("dateFin doit être non vide");
		return false;
	}

	
	if(pourcentage.length==100)
	{
		alert("pourcentage doit être non vide");
		return false;
	}



	


	}