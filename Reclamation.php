<?php

class Reclamation
{
    private $id_Rec;
    private $id_client;
    private $date_ajout;
    private $priorite;
    private $sujet;
    private $description;
    private $etat;

    //user
    private $user_firstname;
    private $user_lastname;

    //rendez CamelCase
    private $dateRdv;
    /**
     * Reclamation constructor.
     * @param $id_Rec
     * @param $date_ajout
     * @param $priorite
     * @param $sujet
     * @param $description
     * @param $user_firstname
     * @param $user_lastname
     * @param $etat
     */
    public function __construct($id_Rec, $date_ajout, $priorite, $sujet, $description, $user_firstname, $user_lastname, $etat, $id_client, $dateRdv)
    {
        $this->id_Rec = $id_Rec;
        $this->date_ajout = $date_ajout;
        $this->priorite = $priorite;
        $this->sujet = $sujet;
        $this->description = $description;
        $this->user_firstname = $user_firstname;
        $this->user_lastname = $user_lastname;
        $this->etat=$etat;
        $this->id_client=$id_client;
        $this->dateRdv = $dateRdv;
    }


    public static function getReclamations()
    {
        $list = [];
        $db = config::getConnexion();
        $req = $db->query('SELECT * FROM Reclamation');
        foreach ($req->fetchAll() as $rec) {
            array_push($list, new Reclamation($rec['id_Rec'], $rec['date_ajout'], $rec['priorite'],
                $rec['sujet'],  $rec['description'],  $rec['nom'], $rec['prenom'], $rec['etat'], $rec['id_client'], $rec['date_rdv']));
        }

        return $list;
    }


    public static function getReclamationById($id)
    {
        $db = config::getConnexion();
        $req = $db->prepare("SELECT `id_Rec`, u.nom, u.prenom, `date_ajout`, `priorite`, `sujet`, `description`, `etat`, `id_client`, r.date_rdv FROM `reclamation` join user u on u.id = id_client left join rendezvous r on num_reclamation = r.id_rec where `num_reclamation` =:recnum");
        $req->bindParam(':recnum', $id);

        $req->execute();
        $reclamation = null;
        foreach ($req->fetchAll() as $rec) {
            $reclamation =  new Reclamation($rec['num_reclamation'], $rec['date_ajout'], $rec['priorite'],
                $rec['sujet'],  $rec['description'],  $rec['nom'], $rec['prenom'], $rec['etat'], $rec['id_client'], $rec['date_rdv']);
        }
        return $reclamation;
    }



    /**
     * @return mixed
     */
    public function getUserFirstname()
    {
        return $this->user_firstname;
    }

    /**
     * @param mixed $user_firstname
     */
    public function setUserFirstname($user_firstname)
    {
        $this->user_firstname = $user_firstname;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * @param mixed $dateRdv
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;
    }



    /**
     * @return mixed
     */
    public function getUserLastname()
    {
        return $this->user_lastname;
    }

    /**
     * @param mixed $user_lastname
     */
    public function setUserLastname($user_lastname)
    {
        $this->user_lastname = $user_lastname;
    }


    /**
     * @return mixed
     */
    public function getNumReclamation()
    {
        return $this->id_Rec;
    }

    /**
     * @param mixed $num_reclamation
     */
    public function setNumReclamation($num_reclamation)
    {
        $this->num_reclamation = $num_reclamation;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {

        return date('Y-m-d', strtotime($this->date_ajout));;
    }

    /**
     * @param mixed $date_ajout
     */
    public function setDateAjout($date_ajout)
    {
        $this->date_ajout = $date_ajout;
    }

    /**
     * @return mixed
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * @param mixed $priorite
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}