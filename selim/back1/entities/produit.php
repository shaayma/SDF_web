<?PHP
require_once "C:\wamp64\www\back\config.php";
class produit{
	private $ref_produit;
	private $designation;
	private $prix;
	private $quantite;
	private $image;

	public function __construct($designation,$prix,$quantite,$image){

		$this->designation=$designation;
		$this->prix=$prix;
		$this->quantite=$quantite;
        $this->image=$image;

	}
	 function getdesignation(){
		return $this->designation;
	}
	 function getprix(){
		return $this->prix;
	}
	 function getquantite(){
		return $this->quantite;
	}
	 function getimage(){
		return $this->image;
	}
	 function setref_produit($ref_produit){
		$this->ref_produit=$ref_produit;
	}
	 function setdesignation($designation){
		$this->designation=$designation;
	}
	 function setprix($prix){
		$this->prix=$prix;
	}
	 function setquantite($quantite){
		$this->quantite=$quantite;
	}
	 function setimage($image){
		$this->image=$image;
	}

	 function afficherproduit()
	{
		//$sql="SElECT * From client inner join formationphp.client a on e.id= a.Ref_designation";
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
