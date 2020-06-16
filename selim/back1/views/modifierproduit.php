<?php
include 'C:\wamp64\www\back\entities\produit.php';
include 'C:\wamp64\www\back\core\produitC.php';



  $ref_produit=$_POST["ref_produit"];
  $designation=$_POST["designation"];
  $prix=$_POST["prix"];
  $quantite=$_POST["quantite"];

 $produitC=new produitC();
 $produitC->modifierproduit($ref_produit,$designation,$prix,$quantite);
 header('location:produit1.php');





  //affichage des résultats, pour savoir si la modification a marchée:
  // if($requete)
  // {
  //   echo("La modification à été correctement effectuée") ;
  // }
  // else
  // {
  //   echo("La modification à échouée") ;
  // }
?>
