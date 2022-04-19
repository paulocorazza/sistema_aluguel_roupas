<?php

use App\Session\Login;

Login::isLogged();


?>


<div class="p-5 bg-light">
        <i class="fa-solid fa-hexagon-exclamation"></i>
        <h1 class="display-3">Opss!</h1>
        <p class="lead">Aconteceu algum problema!</p>
        <hr class="my-2">
        <p>Volte para o começo</p>
        <?php if(isset($_SESSION['user']['id'])){ ?>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/views/main.php" role="button">Clique aqui para voltar ao início!</a>
            </p>
        <?php  } else {  ?> 
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/" role="button">Clique aqui para voltar ao início!</a>
            </p>
        <?php } ?>

</div>