<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cin"])){
	$livreurC->supprimerlivreur($_POST["cin"]);
	header('Location: afficherlivreur.php');
}

?>