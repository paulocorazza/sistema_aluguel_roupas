<?php

require __DIR__ .'/vendor/autoload.php';

use App\Entity\User;
use App\Session\Login;

Login::requireLogout();

if(isset($_POST['email'])){

    $user = User::getUserByEmail($_POST['email']);
    if(!$user instanceof User || !password_verify($_POST['password'], $user->password)){
       echo '<h1>Não confere</h1>';
    }
    Login::login($user);       
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/login.php';
include __DIR__ . '/includes/footer.php';