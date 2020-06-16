<?php
error_reporting(0);

include "../config.php";
class user
{
    private $id;
    private $nom;
    private $prenom;
    private $username;
    private $password;
    private $email;
    private $adresse;
    private $age;
    private $type;

    /**
     * User constructor.
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $username
     * @param $password
     * @param $email
     * @param $type
     */
    public function __construct($nom,$prenom,$username,$password,$email,$adresse,$age,$type)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->age = $age;
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $email
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $email
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    public static function checklogin($username,$password)
    {
        $db = config::getConnexion(); //appel fonction static sans new
        $req = $db->prepare('SELECT * FROM user WHERE username =:username AND password =:password');
        $req->bindParam(':username', $username);
        $req->bindParam(':password', $password);
        $req->execute();
        $resultat=$req->fetch();
        return $resultat;

    }

    public static function getUserById($id)
    {
        $user = null;

        $db = config::getConnexion();
        $req = $db->prepare('SELECT * FROM user WHERE id =:num');
        $req->bindParam(':num',$id);

        $req->execute();

        foreach ($req->fetchAll() as $row) {
            $user =  new user($row['nom'], $row['prenom'],
                $row['username'], $row['password'], $row['email'], $row['adresse'] , $row['age'] ,$row['type']);
        }


        return $user;
    }


}
?>

}
?>