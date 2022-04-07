
<?php

require __DIR__ . '/vendor/autoload.php';

use App\Session\Login;

//obriga o usuário a estar logado
Login::logout();