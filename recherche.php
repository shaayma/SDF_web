<!DOCTYPE html>

<html>
<head>
<meta http-equiv="content=type" content="text/html; charset=utf-8"/>
<title>resultat de recherche</title> 
</head>
<body>
	<?php
	include "../config.php";
	define('NOM_SERVEUR',"root" );
	define('MOT_PASSE', "");
	define('SERVEUR', "127.0.0.1");
	define('NOM_BASE',"web" );


	$connexion=config::getConnexion();

	
	$resultat = mysql_query("select * from livraison where nom like '%". $_POST["prenom"]. "%' order by idclient",$connexion);
if ($resultat){
	echo "<h1>voici le resultat de votre recherche</h1>";
	$nbliv = mysql_num_rows($resultat);
	if ($nbliv > 1) {
		echo "<table border ='1'>\n  ";
		echo "<tr>\n";
		echo "<td><strong>idclient/strong></td>\n";
		echo "<td><strong>nom</strong></td>\n";
		echo "<td><strong>adresse</strong></td>\n";
		echo "<td><strong>numtel</strong></td>\n";
		echo "<td><strong>numcommande</strong></td>\n";
		echo "</tr>\n";
		while ($livraison = mysql_fetch_array($resultat)) {
			echo "<tr>\n";
			echo "<td>" .$livraison ["idclient"] ."</td>\n";
			echo "<td>" .$livraison ["nom"] ."</td>\n";
			echo "<td>" .$livraison ["adresse"] ."</td>\n";
			echo "<td>" .$livraison ["numtel"] ."</td>\n";
			echo "<td>" .$livraison ["numcommande"] ."</td>\n";

			echo "</tr>\n";
		}
		echo "</table>\n";
	}else {
		echo "<p>desole il n'y a pas de livraison avec cette id";
	}

}else{
	echo "erreur dans l'exicution de la requète</br>";
	echo "le message d'erreur est :". mysql_error($connexion);
}
?>
</body>
</html>