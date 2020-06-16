
 <?php
require_once "C:\wamp64\www\back\config.php";
class categorieC
 {
	function ajoutcategorie($categorie)
	{
		$sql="insert into categorie (id_categorie,nom_categorie) values
		(:id_categorie,:nom_categorie)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);


        $id_categorie=$categorie->getid_categorie();
        $nom_categorie=$categorie->getnom_categorie();



		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);




            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	public	function affichercategorie()
	{
		//$sql="SElECT * From client inner join formationphp.client a on e.id= a.id";
		$sql="SElECT * From categorie";
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
	public function supprimercategorie($id_categorie)
	{
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function modifiercategorie($id_categorie,$nom_categorie)
      {
          $sql= "UPDATE `categorie` SET `nom_categorie` = '".$nom_categorie."' WHERE `categorie`.`id_categorie` = ".$id_categorie.";";
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
		$sql="SELECT * from categorie order by date_crea desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function getAllcategories($keywords){
		$sql="SELECT * FROM categorie WHERE CONCAT(,`id_categorie`,`nom_categorie`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>
