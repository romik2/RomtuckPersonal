<?php

    include('sql.php');

    DelRowMySql($_GET['table'], $_GET['id'], $_GET['Column']);

    header("Location: /lk/".$_GET['table'].".php");

?>