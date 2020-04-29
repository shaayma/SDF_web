<?php

class Commande
{  
private $idCmd;		
private $dateCmd;
private $idClient;
private $Qt_cmd;
private $etatCmd;



function __construct($idCmd,$dateCmd,$idClient,Qt_cmd)
{
$this->idCmd=$idCmd;
$this->dateCmd=$dateCmd;
$this->idClient=$idClient;
$this->total_ttc=$Qt_cmd;

}

public function getIdCmd()
{
    return $this->idCmd;
}
 
public function setIdCmd($idCmd)
{
    $this->idCmd = $idCmd;
    return $this;
}

public function getDateCmd()
{
    return $this->dateCmd;
}
 
public function setDateCmd($dateCmd)
{
    $this->dateCmd = $dateCmd;
    return $this;
}
public function getIdClient()
{
    return $this->idClient;
}
 
public function setIdClient($idClient)
{
    $this->idClient = $idClient;
    return $this;
}
public function getQt_cmd()
{
    return $this->Qt_cmd;
}
 
public function setQt_cmd($Qt_cmd)
{
    $this->Qt_cmd = $Qt_cmd;
    return $this;
}

public function getEtatCmd()
{
    return $this->etatCmd;
}
 
public function setEtatCmd($etatCmd)
{
    $this->etatCmd = $etatCmd;
    return $this;
}

}
?>