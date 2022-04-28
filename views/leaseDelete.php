<?php

require_once('../vendor/autoload.php');

define('TITLE','Excluir Locação');

use App\Session\Login;
use App\Entity\Lease;

Login::requireLogin();
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/vestidos.php');
    exit;
}

//consulta o usuário
$lease = Lease::getLease($_GET['id']);

//valida o usuário
if(!$lease instanceof Lease){
    header('location: /views/vestidos.php');
    exit;
}

//valida o POST
if(isset($_POST['delete'])){
    try {
        $lease->deleteLease();
    } catch (\Throwable $th) {
        header('location: /views/erro.php');
        exit;
    }
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/leases/delete.php';
include '../includes/footer.php';
