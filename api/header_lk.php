<?php

    if(isset($_COOKIE['session']))
    {
        echo '<a class="btn btn-outline-success" href="/lk/index.php">Личный кабинет</a>';
    }
    else
    {
        echo '<a class="btn btn-outline-primary" href="login.php">Войти</a>';
    }

?>