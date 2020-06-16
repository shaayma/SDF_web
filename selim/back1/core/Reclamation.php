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
            addReclamationAction();
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

function addReclamationAction()
{
    $userid = $_POST['userid'];
    $sujet = $_POST['sujet'];
    $description = $_POST['description'];

    $res = addReclamation($userid, $sujet, $description);



    if ($res == 1) {
        header('Location: ../views/front/TraiteReclamationFront.php');
    } else {
        header('Location: ../views/front/TraiteReclamationFront.php');
    }
}

function addReclamation($userid, $sujet, $description)
{
    $db = config::getConnexion();

    $req = $db->prepare("INSERT INTO `reclamation`(`id_client`, `date_ajout`, `sujet`, `description`) VALUES (:userid,CURDATE(),:sujet, :description)");
    $req->bindParam(':userid', $userid);
    $req->bindParam(':sujet', $sujet);
    $req->bindParam(':description', $description);

    $resultat = $req->execute();

    return $resultat;

}

function removeReclamation()
{

    $num_reclamation = $_POST['sup'];

    $db = config::getConnexion();

    $req = $db->prepare("delete from reclamation where `id_Rec`=:recnum");

    $req->bindParam(':recnum', $num_reclamation);

    $resultat = $req->execute();

    if ($req) {
        header('Location: ../views/TraiterReclamationBack.php?success=true');
    } else {
        header('Location: ../views/TraiterReclamationBack.php?success=false');
    }


    return $resultat;
}

function suptrr ()
{
    $db = config::getConnexion();
    $req = $db->prepare("delete from reclamation
                        where `etat`=2");
    $resultat = $req->execute();

    if ($req) {
        header('Location: ../views/TraiterReclamationBack.php?success=true');
    } else {
        header('Location: ../views/TraiterReclamationBack.php?success=false');
    }


    return $resultat;
}


function updateReclamationEtat()
{
    $num_reclamation = $_POST['Act'];

    $db = config::getConnexion();

    $req = $db->prepare("UPDATE `reclamation` SET etat=etat+1 WHERE `id_Rec`=:recnum");


    $req->bindParam(':recnum', $num_reclamation);

    $resultat = $req->execute();

    if ($req) {
        header('Location: ../views/TraiterReclamationBack.php?success=true');
    } else {
        header('Location: ../views/TraiterReclamationBack.php?success=false');
    }
    return $resultat;
}


?>
