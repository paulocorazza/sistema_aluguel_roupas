<?php

require_once('../vendor/autoload.php');

define('TITLE','Editar Cliente');

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

if(isset($_POST['name'],$_POST['surname'])){
    $customer->name = $_POST['name'];
    $customer->surname = $_POST['surname'];
    $customer->state = $_POST['state'];
    $customer->city = $_POST['city'];
    $customer->street = $_POST['street'];
    $customer->addressNumber = $_POST['addressNumber'];
    $customer->addressComplement = $_POST['addressComplement'];
    $customer->email = $_POST['email'];
    $customer->birthday = $_POST['birthday'];
    $customer->phoneNumber = $_POST['phoneNumber'];
    $customer->updateCustomer();
    // header('location: /views/clientes.php');
    // exit;
}

include '../includes/header.php';
include '../includes/principal.php';
include '../includes/customers/edit.php';
include '../includes/footer.php';

