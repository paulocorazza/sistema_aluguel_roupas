<?php

require_once('../vendor/autoload.php');

define('TITLE','Excluir usuário');

use App\Session\Login;
use App\Entity\User;

Login::requireLogin();
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: /views/usuarios.php');
    exit;
}

//consulta o usuário
$user = User::getUser($_GET['id']);

//valida o usuário
if(!$user instanceof User){
    header('location: /views/usuarios.php');
    exit;
}

//valida o POST
if(isset($_POST['delete'])){
    $user->deleteUser();
    header('location: /views/usuarios.php');
    exit;
}


include '../includes/header.php';
include '../includes/principal.php';
include '../includes/users/delete.php';
include '../includes/footer.php';
