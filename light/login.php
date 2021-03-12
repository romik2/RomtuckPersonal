<!doctype html>
<html class="no-js" lang="ru">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romtuck</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<body class="text-center ">

<?php include_once('header.php')?>


<main class="form-signin container" >
  <form method="POST"  action="/api/button.php">
    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <label for="inputEmail" class="visually-hidden">Логин</label>
    <input type="text" name="login" id="name" class="form-control mb-3" placeholder="Логин" required="" autofocus="">
    
    <label for="inputPassword" class="visually-hidden">Пароль</label>
    <input type="password" name="password" id="inputPassword" class="form-control mb-3" placeholder="Пароль" required="">

    <button name = "loginBut" class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
  </form>
</main>



<script src="../js/bootstrap.min.js"></script>
</body>
</html>
