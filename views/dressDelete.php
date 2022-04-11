<?php

require_once('../vendor/autoload.php');

define('TITLE','Excluir Vestido');

use App\Session\Login;
use App\Entity\Clothe;

Login::requireLogin();
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/vestidos.php');
    exit;
}

//consulta o usuário
$dress = Clothe::getDress($_GET['id']);

//valida o usuário
if(!$dress instanceof Clothe){
    header('location: /views/vestidos.php');
    exit;
}

//valida o POST
if(isset($_POST['delete'])){
    $dress->deleteDress();
    header('location: /views/vestidos.php');
    exit;
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/clothes/dress/delete.php';
include '../includes/footer.php';
