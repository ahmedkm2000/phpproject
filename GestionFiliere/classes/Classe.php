<?php

class Classe {
    private $id;
    private $code;
    private $id_f;
            function __construct($id, $code, $id_f) {
        $this->id = $id;
        $this->code = $code;
        $this->id_f = $id_f;
    }

    function getId() {
        return $this->id;
    }

    function getCode() {
        return $this->code;
    }
    function getId_f() {
    return $this->id_f;
    
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setCode($code) {
        $this->code = $code;
    }
    function setId_f($id_f) {
        $this->id_f = $id_f;
    }

}