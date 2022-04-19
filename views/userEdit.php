<?php

require_once('../vendor/autoload.php');

define('TITLE','Editar usuário');

use App\Session\Login;
use App\Entity\User;

Login::requireLogin();

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/usuarios.php');
    exit;
}

$user = User::getUser($_GET['id']);

if(!$user instanceof User){
    header('location: /views/usuarios.php');
    exit;
}


if(isset($_POST['name'],$_POST['email'],$_POST['password'])){
    try {
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $user->updateUser();
    } catch (\Throwable $th) {
        header("Location: /views/erro.php");
    }
}



include '../includes/header.php';
include '../includes/principal.php';
include '../includes/users/edit.php';
include '../includes/footer.php';

