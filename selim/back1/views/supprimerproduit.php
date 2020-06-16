<?PHP
require_once 'C:\wamp64\www\back\entities\produit.php';
require_once 'C:\wamp64\www\back\core\produitC.php';
 var_dump($_POST);
if (isset($_POST['idsup'])) {
	 echo "1";
 echo "2";
$produitC=new produitC();
$produitC->supprimerproduit($_POST['idsup']);
header('location: produit1.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
