<?php

require_once('../vendor/autoload.php');

define('TITLE','Excluir Cliente');

use App\Session\Login;
use App\Entity\Customer;

Login::requireLogin();
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/clientes.php');
    exit;
}

//consulta o usuário
$customer = Customer::getCustomer($_GET['id']);

//valida o usuário
if(!$customer instanceof Customer){
    header('location: /views/clientes.php');
    exit;
}

//valida o POST
if(isset($_POST['delete'])){
    $customer->deleteCustomer();
    // header('location: /views/clientes.php');
    // exit;
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/customers/delete.php';
include '../includes/footer.php';
