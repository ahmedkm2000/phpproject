<?php

include_once '../racine.php';
include_once RACINE.'/services/FiliereService.php';
extract($_GET);

$es = new FiliereService();
$es->create(new Filiere(1, $code, $libelle));

header("location:../index.php");

