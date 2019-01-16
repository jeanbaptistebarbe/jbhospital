<?php

class patients {

    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $birthdate = '00/00/0000';
    public $phone = '0000000000';
    public $mail = '';
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=jbhospital;dbname=hospitalE2N;charset=utf8', 'barbe', 'soleil02');
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    /**
     * methode permettant d'ajouter un patient 
     * @return bindValue()
     */
    //methode pour ajouter un patient dans la db
    public function addPatients() {
        $query = 'INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES( :lastname, :firstname, :birthdate, :phone, :mail)';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $queryResult->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $queryResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $queryResult->execute();
    }
//methode pour recuperer la liste des patients
    public function getPatientsList() {
        $query = 'SELECT * FROM `patients`;';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
//methode pour recuperer le profil d'un patient suivant l'id
    public function profilPatient() {
        $return = FALSE;
        $isOk = FALSE;
        $query = 'SELECT * FROM `patients` WHERE `id`= :id';
        $queryResult = $this->db->prepare($query);
         $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);         
//si la requete c'est bien executé alors on rempli $returnArray avec un objet         
         if($queryResult->execute()){
             $return= $queryResult->fetch(PDO::FETCH_OBJ);
         }
//si $return est un objet alors on hydrate       
         if(is_object($return)){
             $this->lastname=$return->lastname;
             $this->firstname=$return->firstname;
             $this->birthdate=$return->birthdate;
             $this->phone=$return->phone;
             $this->id=$return->id;
             $this->mail=$return->mail;
             $isOk=TRUE;
         }
      return $isOk;    
    }
//methode pour modifier le profil d'un patient
    public function profilUpdate() {
        $query = 'UPDATE `patients` SET `lastname`=:lastname, `firstname`=:firstname, `birthdate`=:birthdate, `phone`=:phone, `mail`=:mail WHERE `id`= :id';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $queryResult->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $queryResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryResult->execute();
    }

}
?>

