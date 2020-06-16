function test()
{ /*var errors ="";
 var today = new Date(); 
var dateDebut = document.f.dateDebut.value ;
	if(livraison == "") {
		document.getElementById('erreur').innerHTML = "La date est obligatoire";
		return false;
	}
	var date_livraison = new Date(livraison);
	if(today.toISOString() > date_livraison.toISOString()) {
		//document.getElementById('erreur').innerHTML = "Date doit être supérieur à Aujourd'hui";
		//return false;
		errors += "Date doit être supérieur à Aujourd'hui <br>"; 
		var dateFin = document.f.dateFin.value ;
	if(livraison == "") {
		document.getElementById('erreur').innerHTML = "La date est obligatoire";
		return false;
	}
	var date_livraison = new Date(livraison);
	if(today.toISOString() > date_livraison.toISOString()) {
		//document.getElementById('erreur').innerHTML = "Date doit être supérieur à Aujourd'hui";
		//return false;
		errors += "Date doit être supérieur à Aujourd'hui <br>"; */
		var reference,id_produit,dateDebut,dateFin,pourcentage ;	
reference=document.f.reference.value ;
id_produit=document.f.id_produit.value;
dateDebut=document.f.dateDebut.value;
dateFin=document.f.dateFin.value;
pourcentage=document.f.pourcentage.value;

var test,test1,test2,test3;

test=true;
test1=true;
test2=true;
test3=true;



if(id_produit.length==0 || isNaN(id))
{
	alert("Verifier l identifiant de la promotion");
	test=false;
}



if(test==true)
{

if(reference.length==0 || isNaN(idprod))
{
	alert("Verifier l identifiant du produit");
	test1=false;
}

}

if(test1==true)
{

if(pourcentage.length==0)
{
	alert("Verifier le nouveau prix de la promotion");
	test2=false;
}

}


if(test2==true)
{
	if(dateDebut.length==0 ||  dateFin.length==0)
{
	alert('verifir les date de la promotion');
}
}
}
	}