<?php

include_once '../racine.php';
include_once RACINE.'/services/FiliereService.php';
extract($_GET);

$es = new FiliereService();
$es->delete($es->findById($id));
header("location:../index.php");
