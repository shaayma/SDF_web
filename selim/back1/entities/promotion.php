<?PHP
class promotion{
	private $reference;
	private $id_produit;
	private $dateDebut; 
	private $dateFin; 
	private $pourcentage ;
	function __construct($reference,$id_produit,$dateDebut,$dateFin ,$pourcentage){
		$this->reference=$reference;
		$this->id_produit=$id_produit;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin; 
		$this->pourcentage=$pourcentage;
	}
	
	function getreference(){
		return $this->reference;
	}
	function getid_produit(){
		return $this->id_produit;
	} 
	function getdateDebut(){
		return $this->dateDebut;
	}
	function getdateFin(){
		return $this->dateFin;
	}
	function getpourcentage(){ 
		return $this->pourcentage;
	}

	function setreference($reference){
		$this->reference=$reference;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	} 
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
		
	}  
	function setpourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
}

?>