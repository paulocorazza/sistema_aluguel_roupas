<?php

require __DIR__ .'/vendor/autoload.php';

 use App\Entity\User;
 use App\Session\Login;

 Login::requireLogout();

 if(isset($_POST['email'])){

     $user = User::getUserByEmail($_POST['email']);
     if($user instanceof User || password_verify($_POST['password'], $user->password)){
         Login::login($user);   
     } else {
        header("Location: /views/erro.php");
        exit;
     }
        
 }


 include __DIR__ . '/includes/header.php';
 include __DIR__ . '/includes/login.php';
 include __DIR__ . '/includes/footer.php';