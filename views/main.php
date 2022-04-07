<?php

require_once('../vendor/autoload.php');

use App\Session\Login;

//force user to be logged
Login::requireLogin();

include '../includes/header.php';
include '../includes/principal.php';
include '../includes/footer.php';

