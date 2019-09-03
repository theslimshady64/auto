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
    <title> Заказы
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
          <h1>Заказы</h1>
        </div>
        <h3>Поиск по списку заказов</h3>
        <h4>Введите Имя или Фамилию</h4>
        <form method="post" action="search_zak.php">
          <div class="fff">
            <input type="text" name="first_name" placeholder="ФИО"  class="form-control">
          </div>
          <br>
          <input type="hidden" name="date" placeholder="Дата">
          <p>
            <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"> Поиск</span></button>
            <input type="reset" name="res" value="Очистить" class="btn btn-default">
          </p>
        </form> 
<?php include 'newbd.php';
       $rez = mysql_query("SELECT id_zakaz, first_name, data FROM zakaz, clients WHERE idcl=client_id");
      $i = mysql_num_rows($rez);
        ?>
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='zakaz.php'">
            Добавить заказ
          </button>
        </p>
        <h3>Выберите заказ для просмотра детализации</h3>
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Номер
              </th>
              <th>
                Дата
              </th>
              <th>
                Клиент
              </th>
            </tr>
          </thead>
<?php  
while($r = mysql_fetch_array($rez)) {
          ?>
          <tbody class="hov">
            <tr onclick="location.href='blank2.php?id=<?php echo $r['id_zakaz']?>'">
              <td>
                <?php echo $r['id_zakaz']; ?></td>
              <td>
                <?php echo $r['data']; ?></td>
              <td>
                <?php echo $r['first_name']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='zakaz.php'">
            Добавить заказ
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
