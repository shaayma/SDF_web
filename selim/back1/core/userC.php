
<?php

include_once "C:\wamp64\www\back1\config3.php";

class UserC {


    public function register($user)
    {

        $sql='insert into user (nom,prenom,username,password,email,adresse,age,type,dateajout) values (:nom,:prenom,:username,:password,:email,:adresse,:age,:type,CURDATE())';
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$user->getNom());
        $req->bindValue(':prenom',$user->getPrenom());
        $req->bindValue(':username',$user->getUsername());
        $req->bindValue(':password',$user->getPassword());
        $req->bindValue(':email',$user->getEmail());
        $req->bindValue(':adresse',$user->getAdresse());
        $req->bindValue(':age',$user->getAge());
        $req->bindValue(':type',$user->getType());
        $req->execute();
    }

	public function login($email,$password){
		$sql = "select * from user where email=:email and password=:password";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		$req->execute();
		return $req->fetch(2);
	}


function afficherUsers(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From user";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function listeUser()
    {
        $sql="SElECT * From user";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste->fetchAll();
    }
  function supprimerUser($id){
    $sql="DELETE FROM user where id= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
    function modifierUser($user,$id){
    $sql="UPDATE user SET nom=:nom,prenom=:prenom,username=:username,password=:password,email=:email,adresse=:adresse,age=:age,type=:type  WHERE id=:id";

    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $idd=$user->getId();
        $nom=$user->getNom();
        $prenom=$user->getPrenom();
        $username=$user->getUsername();
        $password=$user->getPassword();
        $email=$user->getEmail();
        $adresse=$user->getAdresse();
        $age=$user->getAge();
    $type=$user->getType();




   // $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':username'=>$username,':password'=>$password,':email'=>$email,':adresse'=>$adresse,':age'=>age,':type'=>$type);

    $req->bindValue(':id',$id);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':username',$username);
    $req->bindValue(':password',$password);
    $req->bindValue(':email',$email);
    $req->bindValue(':adresse',$adresse);
    $req->bindValue(':age',$age);
    $req->bindValue(':type',$type);





    $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
 // print_r($datas);
        }

  }
function  recupererUser($id){

$sql="SELECT * from user where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }




}
function rechercherListeUser($type){
        $sql="SELECT * from user where type=$type";
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
