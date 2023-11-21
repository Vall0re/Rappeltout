<?php

class Materiel {

    //Attributs
    private $ref_materiel;
    private $nom_materiel;

    //Constructeur
    function __construct($reference_materiel,$nom_mat){
        $this->ref_materiel=$reference_materiel;
        $this->nom_materiel=$nom_mat;
    }

    public function getref_materiel() {
        return $this->ref_materiel;
    }
    public function setref_materiel($reference_materiel) {
        $this->ref_materiel = $reference_materiel;
    }
    public function getNomMat() {
        return $this->nom_materiel;
    }
    public function setNomMat($nom_mat) {
        $this->nom_materiel = $nom_mat;
    }
    function connex($connexion){
        $this->connex=$connexion;
    }

    public function CreateMateriel() {
        $stmt = $this->connex->prepare('INSERT INTO materiel  VALUE (:ref_materiel, :nom_materiel);');
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->bindParam(':nom_materiel', $this->nom_materiel, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function RetrieveMateriel($valeur) {
        $stmt = $this->connex->prepare ("SELECT * FROM materiel WHERE ref_materiel = :valeur;");
        $stmt->bindParam(':valeur', $valeur, PDO::PARAM_INT);
        $stmt->execute();
        $resultatmat = $stmt->fetch();
        $this->ref_materiel = $resultatmat['ref_materiel'];
        $this->nom_materiel = $resultatmat['nom_materiel'];
    }

    public function findAll() {
        $stmt = $this->connex->prepare("SELECT * FROM materiel;");
        $stmt->execute();
        $resultats = $stmt->fetchAll();
        return $resultats;
    }

    public function updateMateriel() {
        $stmt = $this->connex->prepare("UPDATE materiel SET nom_materiel = :nom_materiel WHERE ref_materiel = :ref_materiel;");
        $stmt->bindParam(':nom_materiel', $this->nom_materiel, PDO::PARAM_STR);
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteMateriel($valeur) {
        $stmt = $this->connex->prepare("DELETE FROM materiel WHERE ref_materiel = :valeur;");
        $stmt->bindParam(':valeur', $valeur, PDO::PARAM_STR); 
        $stmt->execute();
    } 
}

?>
