<?PHP
require_once "C:\wamp64\www\back\config.php";
class categorie{
	private $id_categorie;
	private $nom_categorie;


	public function __construct($id_categorie,$nom_categorie){

		$this->nom_categorie=$nom_categorie;
		$this->id_categorie=$id_categorie;


	}
	function getid_categorie(){
	 return $this->id_categorie;
 }
	 function getnom_categorie(){
		return $this->nom_categorie;
	}

	 function setid_categorie($id_categorie){
		$this->id_categorie=$id_categorie;
	}
	 function setnom_categorie($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}

	 function afficherproduit()
	{
		//$sql="SElECT * From client inner join formationphp.client a on e.id= a.Ref_nom_categorie";
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

}


?>
