<?PHP
require_once 'C:\wamp64\www\back\entities\categorie.php';
require_once 'C:\wamp64\www\back\core\categorieC.php';

if (isset($_POST['id_categorie']) and isset($_POST['nom_categorie']))
{
	$categorie1=new categorie($_POST['id_categorie'],$_POST['nom_categorie'],"categorie");
	$categorieC=new categorieC();
	$categorieC->ajoutcategorie($categorie1);
	header('location:produit.php' );
}
else
{
	echo "vérifier les champs";
}
//*/

?>
