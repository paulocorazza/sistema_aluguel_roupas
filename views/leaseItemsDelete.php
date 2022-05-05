<?php

require_once('../vendor/autoload.php');

define('TITLE','Excluir Item da Locação');

use App\Session\Login;
use App\Entity\LeaseItem;

Login::requireLogin();
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/leaseEdit.php?id='.$_GET['lease_id']);
    exit;
}

//consulta o usuário
$leaseItem = LeaseItem::getLeaseItem($_GET['id']);
$clothe = LeaseItem::getClotheFromLeaseItem();
$clothePhoto = $clothe[0]['clothe_id'].'.png';
$leaseId = LeaseItem::getLeaseFromLeaseItems();


//valida o usuário
if(!$leaseItem instanceof LeaseItem){
    header('location: /views/leaseEdit.php?id='.$_GET['lease_id']);
    exit;
}

//valida o POST
if(isset($_POST['delete'])){
    try {
        $leaseItem->deleteLeaseItem($_GET['id']);
    } catch (\Throwable $th) {
        header('location: /views/erro.php');
        exit;
    }
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/leases/leaseItems/delete.php';
include '../includes/footer.php';
