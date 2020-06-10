<?php
session_start();


  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
      try{
        self::$instance = new PDO('mysql:host=localhost;dbname=ranaweb', 'root', '');
      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
      }
      }
      return self::$instance;
    }
  }


if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        case "ajouter":
            ajoutCommande();
            break;

        case "supprimer":
            removeReclamation();
            break;

        case "updateEtat":
            updateReclamationEtat();
            break;

        case "suptr":
            suptrr();
            break;

    }
}

   function ajoutCommande()
   {  
    $panier_id = $_POST['panier_id'];
    $res = ajouterCommande($panier_id);



    if ($res == 1) {
        header('Location:../views/front/clean.php');
    } else {
        header('Location:../views/front/clean.php');
    }
   }

   function getsommecommande()
    {
        $somme=0;
        $db = config::getConnexion();
        $db2 = config::getConnexion();
        $req = $db->query('SELECT * FROM panier');

        foreach ($req->fetchAll() as $rec) {
                   $req2 = $db2->prepare('SELECT * FROM produit where `idproduit`=:prixp');
                   $req2->bindParam(':prixp',$rec['idprod']);
                   $resultat = $req2->execute();
               foreach ($req2->fetchAll() as $rec2) 
               {
                  $prpr=$rec2['prix'];
                  $somme=$somme+($prpr*$rec['qte']);
               }

            
        }

        return $somme;
    }

   function ajouterCommande($panier_id)
   {  
   	$db=config::getConnexion();
   	$sql="INSERT INTO `commander` (`idpanier`, `prix`, `date`) VALUES (:idp,:prix,:currentDateTime);";
   	$req=$db->prepare($sql);

   	$currentDateTime = date('Y-m-d H:i:s');
   	$req->bindValue(':idp',$panier_id);
      $req->bindValue(':prix',getsommecommande());
      $req->bindValue(':currentDateTime',$currentDateTime);

   	
   	$req->execute();  
   }

	
?>