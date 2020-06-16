<?PHP
include "../entites/livreur.php";
include "../core/livreurC.php";
$livreur=new livreur(75757575,'BEN Ahmed','Salah','ariana');
$livreurrC=new livreurC();
$livreurrC->afficherlivreur($livreur);
echo "****************";
echo "<br>";
echo "cin:".$livreur->getCin();
echo "<br>";
echo "nom:".$livreur->getNom();
echo "<br>";
echo "prenom:".$livreur->getPrenom();
echo "<br>";
echo "nbH:".$livreur->getSecteur();
echo "<br>";


?>