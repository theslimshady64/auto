﻿<?php include 'session_cl.php'; ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Предварительные заказы
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
<?php include 'nav_cl.php';
include 'newbd.php';
$id = $_GET['id'];
    ?>
    <div class="container">
      <div class="starter-template">
        <div class="page-header">
          <h1>Предварительные заказы</h1>
        </div> 
<?php $rez = mysql_query("SELECT id_zakaz_cl, first_name, data FROM zakaz_cl, clients WHERE idcl=client_id and client_id='$id'"); $i = mysql_num_rows($rez); ?>
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
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
            <tr onclick="location.href='blank_cl_early.php?id=<?php echo $r['id_zakaz_cl']?>'">
              <td>
                <?php echo $r['id_zakaz_cl']; ?></td>
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
