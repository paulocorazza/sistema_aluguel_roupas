<?php

require_once('../vendor/autoload.php');

define('TITLE','Editar Locaçāo');

use App\Session\Login;
use App\Entity\Lease;
use App\Entity\Customer;
use App\Entity\Clothe;
use App\Entity\LeaseItem;

Login::requireLogin();

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/locacoes.php');
    exit;
}

$lease = Lease::getLease($_GET['id']);
$customers = Customer::getCustomers();
$clothes = Clothe::getDresses();
$leaseItems = LeaseItem::getLeaseItemsDress();
$leaseItemsTotal = LeaseItem::getLeaseItemsTotal();






if(!$lease instanceof Lease){
    header('location: /views/locacoes.php');
    exit;
}

if(isset($_POST['customerId'])){
    try {
        $lease->customerId = $_POST['customerId'];
        $lease->tryDate = $_POST['tryDate'];
        $lease->takeDate = $_POST['takeDate'];
        $lease->returnDate = $_POST['returnDate'];
        $lease->updateLease();
    } catch (\Throwable $th) {
        header('location: /views/erro.php');
        exit;
    }  
}

if(isset($_POST['lease_id'])){
   
    $leaseItem = new LeaseItem();
    $leaseItem->leaseId = $_POST['lease_id'];
    $leaseItem->clotheCode = $_POST['clothe_code'];
    $leaseItem->clotheId = $_POST['clothe_id'];
    $leaseItem->comments = $_POST['comments'];
    $leaseItem->rentPrice = $_POST['rentPrice'];
    $leaseItem->saveLeaseItem();
    $leaseItem->updateClotheStatus();
    // header("Location: /views/leaseEdit.php?id=".$_GET['id']);
    // exit;
}




include '../includes/header.php';
include '../includes/principal.php';
include '../includes/leases/edit.php';
include '../includes/footer.php';

