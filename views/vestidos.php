<?php

require_once('../vendor/autoload.php');

use App\Entity\Clothe;
use App\Session\Login;

$dresses = Clothe::getDresses();

//force user to be logged
Login::requireLogin();


if(isset($_POST['code'])){

    $dress = new Clothe();
    $dress->code = $_POST['code'];
    $dress->photo = $_POST['photo'];
    $dress->buyPrice = $_POST['buyPrice'];
    $dress->rentPrice = $_POST['rentPrice'];
    $dress->salePrice = $_POST['salePrice'];
    $dress->status = $_POST['status'];
    $dress->size = $_POST['size'];
    $dress->type = $_POST['type'];
    $dress->createClothe();

    header('Location: /views/vestidos.php');
    exit;

}

include '../includes/header.php';
include '../includes/principal.php';
include '../includes/dresses.php';
include '../includes/footer.php';

