<?php

require_once('../vendor/autoload.php');

use App\Entity\Customer;
use App\Session\Login;

$customers = Customer::getCustomers();

//force customer to be logged
Login::requireLogin();


if(isset($_POST['name'],$_POST['surname'])){

    $customer = new Customer();
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

    $customer->createCustomer();

    header('Location: /views/clientes.php');
    exit;

}

include '../includes/header.php';
include '../includes/principal.php';
include '../includes/customers.php';
include '../includes/footer.php';

