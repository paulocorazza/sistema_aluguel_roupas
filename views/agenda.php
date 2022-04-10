<?php

require_once('../vendor/autoload.php');


use App\Session\Login;


//force customer to be logged
Login::requireLogin();



include '../includes/header.php';
include '../includes/principal.php';
include '../includes/agenda.php';
include '../includes/footer.php';