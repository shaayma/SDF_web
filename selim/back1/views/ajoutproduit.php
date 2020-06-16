<?PHP
include "../entities/produit.php";
include "../core/produitC.php";



$sql="insert into produit (designation,prix,quantite,image) values ( :designation,:prix,:quantite,:image)";
		echo"test";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);


	    $req->bindValue(':designation',$_POST['designation']);
		$req->bindValue(':prix',$_POST['prix']);
		$req->bindValue(':quantite',$_POST['quantite']);
		$req->bindValue(':image',$_POST['image']);



            $req->execute();header('Location: Gproduit.php');

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

?>
