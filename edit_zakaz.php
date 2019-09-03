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
    <title> Редактирование записи
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
          <h1>Редактирование записи</h1>
        </div>
<?php
        $id = $_GET['id'];
$rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '$id'");
      $i = mysql_num_rows($rez);
        ?>
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
        <p>
          <a href="new_zakaz.php">Добавить услугу</a>
        </p>
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Номер
              </th>
              <th>
                Стоимость
              </th>
            </tr>
          </thead>
<?php
while($r = mysql_fetch_array($rez)) {
          ?>
          <tbody class="hov">
            <tr onclick="location.href='edit_post_zak.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
                <td>
                <?php echo $r['price']; ?></td>
            </tr>
<?php
}
            ?>
        </table>
        </div>
        <p>
          <button type="button" class="btn btn-success" onclick="javascript:window.location='new_zakaz.php'">
            Добавить услугу
          </button>
        </p>
        <p>
          <a href="#top">Наверх</a>
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
