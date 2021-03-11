<!doctype html>
<html class="no-js" lang="ru">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romtuck</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <body>
    
        <?php include_once('header.php')?>
   
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Управление пользователями</h1>
          </div>
          <button class = "btn btn-outline-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Добавить</button>
          <a class="btn btn-outline-dark" href="login.php">Добавить роль</a>

          <div id="id01" class="modal">
  
            <form class="modal-content container animate">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              <label for="inputEmail" class="visually-hidden">Логин</label>
              <input type="text" id="inputEmail" class="form-control mb-3" placeholder="Логин" required="" autofocus="">
              
              <label for="inputPassword" class="visually-hidden">Пароль</label>
              <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Пароль" required="">

              <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
            </form>

          </div>
        
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ФИО</th>
                  <th>Логин</th>
                  <th>Роль</th>
                  <th>Действие</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                  include_once('../api/sql.php');
                  $array = SelectSql("users", "roles", "id", "id_role");
                  $k = 0;
                  $i = 0;
                  while ($k < round(count($array) / 7)):
                ?>
                <tr>
                  <td><?php echo $array[$i];?></td>
                  <td><?php echo $array[$i+1]." ".$array[$i+2]." ".$array[$i+3];?></td>
                  <td><?php echo $array[$i+4];?></td>
                  <td><?php echo $array[$i+6];?></td>
                  <td><a class="w-45 btn btn-md-2 btn-success" href="login.php">Редактировать</a> <a class="w-45 btn btn-md-2 btn-danger" href="login.php">Удалить</a></td>
                </tr>
                <?php $k++; $i=+7; endwhile;?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    
    </body>

<script src="../../js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

</html>
