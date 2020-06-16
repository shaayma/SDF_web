
 <?php
require_once "C:\wamp64\www\back\config.php";
class produitC
 {
	function ajoutproduit($produit)
	{
		$sql="insert into produit (designation,prix,quantite,image) values
		(:designation,:prix,:quantite,:image)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);


        $designation=$produit->getdesignation();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();


		$req->bindValue(':designation',$designation);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);




            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	public	function afficherproduit()
	{
		//$sql="SElECT * From client inner join formationphp.client a on e.id= a.id";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	public function supprimerproduit($ref_produit)
	{
		$sql="DELETE FROM produit where ref_produit= :ref_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_produit',$ref_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function modifierproduit($ref_produit,$designation,$prix,$quantite)
      {
          $sql= "UPDATE `produit` SET `designation` = '".$designation."',`prix` = '".$prix."',`quantite` = '".$quantite."' WHERE `produit`.`ref_produit` = ".$ref_produit.";";
          $db = config::getConnexion();
          try
          {
              $db->query($sql);
          }
          catch (Exception $e)
          {
              die('Erreur: '.$e->getMessage());
          }
      }
/* function modifierclient($id,$nom,$prenom,$username,$adresse,$telephone,$email,$password)
	{
		$db = config::getConnexion();
		$sql="UPDATE client SET nom='".$nom."',prenom='".$prenom."',email='".$email."',username='".$username."',adresse='".$adresse."',telephone='".$telephone."',password='".$password."',  where id='".$id."';";
		try
		{
        $req=$db->prepare($sql);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}*/
  function trier(){
		$sql="SELECT * from produit order by date_crea desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function getAllproduits($keywords){
		$sql="SELECT * FROM produit WHERE CONCAT(`ref_produit`,`designation`,`prix`,`quantite`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function afficherproduits()
	{
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}
	  function triec(){
		$sql="SELECT * from produit order by prix desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getAllcommandeS($keywords){
		$sql="SELECT * FROM produit WHERE CONCAT(`prix`,`quantite`,`designation`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function recuperercommandes()
	{
   		$sql="SELECT * from produit";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>
