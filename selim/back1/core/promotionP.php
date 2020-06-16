<?PHP
include "config.php"; 
class promotionP
 {
 	/*
   function afficherpromotion ($promotion)
   {
		echo "reference: ".$promotion->getreference()."<br>";
		echo "id produit : ".$promotion->id_produit()."<br>";
		echo "date de debut : ".$promotion->getdateDebut()."<br>";
		echo "date de fin : ".$promotion->getdateFin()."<br>";
		echo "pourcentage:" .$promotion->getpourcentage()."<br>";
	} 
	*/

	function ajouterpromotion($promotion)
	{
		$sql="insert into promotion (reference,id_produit,dateDebut,dateFin,pourcentage) values (:reference, :id_produit,:dateDebut,:dateFin,:pourcentage)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $reference=$promotion->getreference();
        $id_produit=$promotion->getid_produit();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
        $pourcentage=$promotion->getpourcentage();
		$req->bindValue(':reference',$reference);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':pourcentage',$pourcentage) ;
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpromotion(){
		$sql="SElECT * From promotion order by pourcentage desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromotion($reference){
		$sql="DELETE FROM promotion where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier($promotion,$reference){
        $sql="UPDATE promotion SET  reference=:reference , id_produit=:id_produit , dateDebut=:dateDebut ,dateFin=:dateFin ,pourcentage=:pourcentage  WHERE reference=$reference";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
         $reference=$promotion->getreference();
        $id_produit=$promotion->getid_produit();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
        $pourcentage=$promotion->getpourcentage();
		$req->bindValue(':reference',$reference);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':pourcentage',$pourcentage) ;

                
            $req->execute();

        ob_start();
       header("Location:promotion.php");
       exit();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


	function recupererpromotion($reference)
	{
		$sql="SELECT * from promotion where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} }	
?>