<?php

require_once('../vendor/autoload.php');

use App\Entity\User;
use App\Session\Login;

$users = User::getUsers();

//force user to be logged
Login::requireLogin();


if(isset($_POST['name'],$_POST['email'],$_POST['password'])){

    $user = new User();
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $user->createUser();

    header('Location: /views/usuarios.php');
    exit;

}

include '../includes/header.php';
include '../includes/principal.php';
include '../includes/users.php';
include '../includes/footer.php';

