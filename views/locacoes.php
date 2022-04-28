<?php

require_once('../vendor/autoload.php');

use App\Entity\Lease;
use App\Entity\Customer;
use App\Session\Login;
use App\Entity\Clothe;

$leases = Lease::getLeases();
$customers = Customer::getCustomers();


//force user to be logged
Login::requireLogin();

if(isset($_POST['customerId'])){
    try {
        $lease = new Lease();
        $lease->customerId = $_POST['customerId'];
        $lease->tryDate = $_POST['tryDate'];
        $lease->takeDate = $_POST['takeDate'];
        $lease->returnDate = $_POST['returnDate'];
        $lease->createLease();
    } catch (\Throwable $th) {
        header("Location: /views/erro.php");
    }
}



include '../includes/header.php';
include '../includes/principal.php';
include '../includes/leases.php';
include '../includes/footer.php';

