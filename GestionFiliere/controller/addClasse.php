<?php

include_once '../racine.php';
include_once RACINE.'/services/ClasseService.php';
extract($_GET);

$es = new ClasseService();
$es->create(new Classe(1, $code,$ID_F ));

header("location:../index2.php");
