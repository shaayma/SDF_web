<?php

class Commande
{  
private $idCmd;		
private $dateCmd;
private $idpanier;
private $prix;




function __construct($idCmd,$idpanier,$prix,$dateCmd)
{
$this->idCmd=$idCmd;
$this->dateCmd=$dateCmd;
$this->idpanier=$idpanier;
$this->prix=$prix;

}





public function getId()
{
    return $this->idCmd;
}
 
public function setId($idCmd)
{
    $this->idCmd = $idCmd;
    return $this;
}


public function getDate()
{
    return $this->dateCmd;
}
 
public function setDate($dateCmd)
{
    $this->dateCmd = $dateCmd;
    return $this;
}


public function getIdpanier()
{
    return $this->idpanier;
}
 
public function setIdpanier($idCmd)
{
    $this->idpanier = $idCmd;
    return $this;
}
public function getPrix()
{
    return $this->prix;
}
 
public function setPrix($prix)
{
    $this->prix = $prix;
    return $this;
}

public static function getCommandes()
    {
        $list = [];
        $db = config::getConnexion();
        $req = $db->query('SELECT * FROM Commander');
        foreach ($req->fetchAll() as $rec) {
            array_push($list, new Commande($rec['id'], $rec['idpanier'],
                $rec['prix'],  $rec['date']));
        }
        return $list;
    }


}
?>