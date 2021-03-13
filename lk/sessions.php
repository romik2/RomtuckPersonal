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
            <h1 class="h2">Главная</h1>
          </div>
    
        
          <h2>Активные сессии</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Номер сессии</th>
                  <th>Пользователь</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  include_once('../api/sql.php');
                  SessionSel();
                  $array = SelectSql("sessions", "users", "id", "id_users");
                  print_r($array);
                  $k = 0;
                  $i = 0;
                  while ($k < round(count($array) / 24)):
                ?>
                <tr>
                  <td><?php echo $array[$i];?></td>
                  <td><?php echo $array[$i+1]?></td>
                  <td><?php echo $array[$i+7]." (".$array[$i+4]." ".$array[$i+5]." ".$array[$i+6].")";?></td>
                </tr>
                <?php $k++;  $i = $i + 24; endwhile;?>
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


