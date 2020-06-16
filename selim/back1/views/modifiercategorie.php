<?php
include 'C:\wamp64\www\back\entities\categorie.php';
include 'C:\wamp64\www\back\core\categorieC.php';



  $id_categorie=$_POST["id_categorie"];
  $nom_categorie=$_POST["nom_categorie"];


 $categorieC=new categorieC();
 $categorieC->modifiercategorie($id_categorie,$nom_categorie);
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
