<?php

require_once('../vendor/autoload.php');

define('TITLE','Editar Vestido');

use App\Session\Login;
use App\Entity\Clothe;

Login::requireLogin();

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/vestidos.php');
    exit;
}

$dress = Clothe::getDress($_GET['id']);

if(!$dress instanceof Clothe){
    header('location: /views/vestidos.php');
    exit;
}

if(isset($_POST['code'])){
    try {
        $dress->code = $_POST['code'];
        $dress->photo = ($dress->photo) ?: $dress->photo = $_POST['photo'];
        $dress->rentPrice = $_POST['rentPrice'];
        $dress->buyPrice = $_POST['buyPrice'];
        $dress->salePrice = $_POST['salePrice'];
        $dress->status = $_POST['status'];
        $dress->size = $_POST['size'];
        $dress->updateDress();
    } catch (\Throwable $th) {
        header('Location: /views/erro.php');
        exit;
    }
    
    
}

if(isset($_POST['photo'])){
    try {
        $dress->photo = $_POST['photo'];
        $dress->updateDress();
        header("Location: /views/dressEdit.php?id=" . $_GET['id'] );
    } catch (\Throwable $th) {
        header('Location: /views/erro.php');
        exit;;
    }
    
    
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/clothes/dress/edit.php';
include '../includes/footer.php';

