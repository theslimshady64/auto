<?php include 'session_m.php'; ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title> Запчасти
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
<?php include 'nav_m.php';
include 'newbd.php';
    ?>
    <div class="container">
      <div class="starter-template">
        <div class="page-header">
          <h1>Запчасти</h1>
        </div>
        <h3>Поиск по списку запчастей</h3>
        <h4>Введите название запчасти</h4>
        <form method="post" action="search_zap.php">
          <div class="fff">
            <input type="text" name="name_zap" placeholder="Название" class="form-control">
          </div>
          <br>
          <p>
            <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"> Поиск</span></button>
            <input type="reset" name="res" value="Очистить" class="btn btn-default">
          </p>
        </form>
<?php include 'newbd.php';
      $rez = mysql_query("SELECT * FROM catalog");
      $i = mysql_num_rows($rez);
        ?>
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_zap.php'">
            Добавить запчасть
          </button>
        </p>
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Категория
              </th>
              <th>
                Название
              </th>
              <th>
                Марка авто
              </th>
              <th>
                Стоимость
              </th>
              <th>
                Количество
              </th>
            </tr>
          </thead>
<?php
while($r = mysql_fetch_array($rez)) {
          ?>
          <tbody class="hov">
            <tr onclick="location.href='edit_post_zap.php?id=<?php echo $r['id_catalog']?>'">
              <td>
                <?php echo $r['cat_zap']; ?></td>
              <td>
                <?php echo $r['name_zap']; ?></td>
              <td>
                <?php echo $r['marka_avto_zap']; ?></td>
              <td>
                <?php echo $r['price_zap']; ?></td>
              <td>
                <?php echo $r['col_zap']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_zap.php'">
            Добавить запчасть
          </button>
        </p>
      </div>
    </div>
    <!-- /.container -->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
