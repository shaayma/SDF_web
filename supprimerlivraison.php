<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["idclient"])){
	$livraisonC->supprimerlivraison($_POST["idclient"]);
	header('Location: afficherlivraison.php');
}

?>