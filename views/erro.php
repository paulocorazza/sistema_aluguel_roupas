<?php

require_once('../vendor/autoload.php');

use App\Session\Login;

Login::requireLogout();


include '../includes/header.php';
include '../includes/error.php';
include '../includes/footer.php';
