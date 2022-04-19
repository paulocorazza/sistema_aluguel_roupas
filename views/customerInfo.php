<?php

require_once('../vendor/autoload.php');

define('TITLE','Ver Cliente');

use App\Session\Login;
use App\Entity\Customer;

Login::requireLogin();

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/clientes.php');
    exit;
}

$customer = Customer::getCustomer($_GET['id']);

if(!$customer instanceof Customer){
    header('location: /views/clientes.php');
    exit;
}



include '../includes/header.php';
include '../includes/principal.php';
include '../includes/customers/customerView.php';
include '../includes/footer.php';

