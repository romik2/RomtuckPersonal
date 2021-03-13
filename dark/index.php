<!doctype html>
<html class="no-js" lang="ru">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romtuck</title>
    <link href="../css/bootstrap-dark.min.css" rel="stylesheet">
<body>

<?php include_once('header.php')?>


<main class="container">
  <div class="col-md-13">
  <h1>Проекты</h1>

  <?php  
                  include_once('../api/sql.php');
                  $array = SelectSql("project", "tag", "id", "id_tag");
                  $k = 0;
                  $i = 0;
                  while ($k < round(count($array) / 24)):
                ?>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $array[$i+6]?></strong>
          <h3 class="mb-0"><?php echo $array[$i+1]?></h3>
          <div class="mb-1 text-muted"><?php echo $array[$i+2]?></div>
          <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
          <a href="<?php echo $array[$i+3]?>" class="stretched-link">GitHub</a>
        </div>
      </div>
      <?php $k++;  $i = $i + 24; endwhile;?>
      
    </div>
</main>



<script src="../js/bootstrap.min.js"></script>
</body>
</html>
