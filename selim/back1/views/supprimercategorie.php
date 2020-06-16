<?PHP
require_once 'C:\wamp64\www\back\entities\categorie.php';
require_once 'C:\wamp64\www\back\core\categorieC.php';
 var_dump($_POST);
if (isset($_POST['idsup'])) {
	 echo "1";
 echo "2";
$categorieC=new categorieC();
$categorieC->supprimercategorie($_POST['idsup']);
header('location: produit1.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
