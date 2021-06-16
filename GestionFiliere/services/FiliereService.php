<?php
include_once RACINE . '/classes/Filiere.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/idao.php';

class FiliereService implements idao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO filiere (`id_f`, `code_f`, `libelle`) "
                . "VALUES (NULL, '" . $o->getCode() . "', '" . $o->getLibelle() . "') ;";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
       
    }

    public function delete($o) {
        $query = "delete from filiere where id_f = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from filiere";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Filiere($e->id_f, $e->Code_f, $e->libelle);
        }
        return $etds;
    }

    public function findById($id) {
        $query = "select * from filiere where id_f = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Filiere($e->id_f, $e->Code_f, $e->libelle);
        }
        return $etd;
}

        }

