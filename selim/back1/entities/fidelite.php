<?PHP
class fidelite{
	private $ref ;
	private $id_client;
	private $point;

	function __construct($ref,$id_client,$point){ 
		$this->ref=$ref ;
		$this->id_client=$id_client;
		$this->point=$point;
	} 

	function getref(){
		return $this->ref;}
	
	function getid_client(){
		return $this->id_client;
	}
	function getpoint(){
		return $this->point;
	}   
	function setref($ref){
		$this->ref=$ref; }
	

	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setpoint($point){
		$this->point=$point;}
	
}

?>