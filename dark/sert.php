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
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<?php  
                  include_once('../api/sql.php');
                  $array = SelectSql("sert", "users", "id", "id_users");
                  $k = 0;
                  $i = 0;
                  while ($k < round(count($array) / 24)):
                ?>
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="<?php echo $array[$i+4]?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef">Thumbnail</text></svg>
            <div class="card-body">
              <h6 class="card-text"><?php echo $array[$i+1]?></h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <small class="text-muted"><?php echo $array[$i+3]?></small>
              </div>
            </div>
          </div>
        </div>
        <?php $k++;  $i = $i + 24; endwhile;?>

        
       
      </div>
</main>



<script src="../js/bootstrap.min.js"></script>
</body>
</html>
