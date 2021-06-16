<?php
include_once RACINE . '/classes/Classe.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/idao.php';

class ClasseService implements idao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO classe (`id_c`, `code_c`, `id_f`) "
                . "VALUES (NULL, '" . $o->getCode() . "', '" . $o->getId_f() . "') ;";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from classe where id_c = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from classe";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Classe($e->id_c, $e->code_c, $e->id_f);
        }
        return $etds;
    }

    public function findById($id) {
        $query = "select * from classe where id_c = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Classe($e->id_c, $e->code_c, $e->id_f);
        }
        return $etd;
    }
}