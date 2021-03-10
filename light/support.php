<!doctype html>
<html class="no-js" lang="ru">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romtuck</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<body>

<?php include_once('header.php')?>

<main class="container">
    <h3>Просмотр запросов</h1>
    <form class="form-inline" role="form">
    <div class="col-md-12">
        <input type="email" id="inputEmail" class="form-control" placeholder="Электронный адрес" required="" autofocus="">
    </div>

    <br>

    <div class="pull-right col-md-3">
    <div class="text-right">
        <button class="w-100 btn btn-md-2 btn-primary" type="submit">Отправить</button>
        </div>
    </div>
    </form> 


    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0">Найденные запросы</h3>
    
    <div class="d-flex text-muted pt-3">

      <p class="lead pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><a class = "text-dark" href="">Всё сломанно</a></strong>
        Some more representative placeholder content, related to this other user. Another status update, perhaps.
      </p>
    </div>
    
  </div>
</main>



<script src="../js/bootstrap.min.js"></script>
</body>
</html>
