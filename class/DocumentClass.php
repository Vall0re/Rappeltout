<?php


class Document {

    //attributs
    private $num_doc;
    private $date_exp;
    private $ref_materiel;
    private $connex;

    //Constructeur 
    function __construct($date_expiration,$reference_materiel){
        //$this->num_doc=$numero_doc;
        $this->date_exp=$date_expiration;
        $this->ref_materiel=$reference_materiel;
        
    }
    //accesseurs
    
    public function getDate_exp() {
        return $this->date_exp;
    }
    public function getref_materiel() {
        return $this->ref_materiel;
    }

    public function setref_materiel($reference_materiel) {
        $this->ref_materiel = $reference_materiel;
    }
    public function setDate_exp($date_expiration) {
        $this->date_exp = $date_expiration;
    }
    
    //fonction de connexion obligé de mettre sinon sa me metter une erreur
    function connex($connexion){
        $this->connex=$connexion;
    }

    function create() {
        include 'connexBD.php';

        $req = "INSERT INTO document(date_exp, ref_materiel) VALUE (:date_exp, :ref_materiel)";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':date_exp', $this->date_exp, PDO::PARAM_STR);
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        try {
            $stmt-> execute();
        }
        catch(PDOException $e){
            die ('Erreur : '.$e->getmessage());
        }
    }

    function RetrieveDocument($valeur) {
        include 'connexBD.php';

        $req = "SELECT * FROM document WHERE num_doc = :valeur;";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':valeur', $valeur, PDO::PARAM_STR);
        try {
            $stmt-> execute();
        }
        catch(PDOException $e){
            die ('Erreur : '.$e->getmessage());
        }
        $resultatDoc = $stmt->fetchAll();
        return $resultatDoc;
    }

    public function findAll() {
        $stmt = $this->connex->prepare("SELECT * FROM document;");
        $stmt->execute();
        $resultats = $stmt->fetchAll();
        return $resultats;
    }

    public function update($num_doc, $new_date_exp, $new_ref_materiel) {
        include 'connexBD.php';

        $req = "UPDATE document SET date_exp = :new_date_exp, ref_materiel = :new_ref_materiel WHERE num_doc = :num_doc";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':new_date_exp', $new_date_exp, PDO::PARAM_STR);
        $stmt->bindParam(':new_ref_materiel', $new_ref_materiel, PDO::PARAM_STR);
        $stmt->bindParam(':num_doc', $num_doc, PDO::PARAM_INT);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function deleteDocument($num_doc) {
        include 'connexBD.php';

        $req = "DELETE FROM document WHERE num_doc = :num_doc";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':num_doc', $num_doc, PDO::PARAM_INT);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }







    /*public function UpDateDocument() {
        $req = "UPDATE materiel SET 'num_doc'='[:num_doc]', 'date_expiration'='[:date_expiration]', 'ref_materiel'='[:ref_materiel]';";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':num_doc', $this->$numero_doc);
        $stmt->bindParam(':date_expiration', $this->$date_expiration);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->execute();
    }

    public function DeleteDocument() {
        $req = "DELETE FROM materiel WHERE VALUE (:num_doc, :date_expiration, :ref_materiel);";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':num_doc', $this->$numero_doc);
        $stmt->bindParam(':date_expiration', $this->$date_expiration);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->execute();
    }  */  
}
?>