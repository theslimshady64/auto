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
    <title> Клиенты
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
          <h1>Клиенты</h1>
        </div>
<?php $rez = mysql_query("SELECT * FROM clients");
      $i = mysql_num_rows($rez);
        ?> 
        <h3>Поиск по списку клиентов</h3>
        <h4>Введите Имя, Фамилию, Марку или Модель</h4>
        <form method="post" action="search_cl.php" class="form-signin">
          <div class="fff">
            <input type="text" name="first_name" placeholder="ФИО" class="form-control">
            <input type="text" name="marka" placeholder="Авто" class="form-control">
          </div>
          <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>">
          <p>
            <br>
            <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"> Поиск</span></button>
            <input type="reset" name="res" value="Очистить" class="btn btn-default">
          </p>
        </form> 
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_clients.php'">
            Добавить клиента</a>
          </button>
        </p>
        <div class="left">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>
                Номер
              </th>
              <th>
                ФИО
              </th>
              <th>
                Марка авто
              </th>
              <th>
                Гос номер
              </th>
              <th>
                Телефон
              </th>
              <th>
                Дата регистрации
              </th>
              <th>
                Логин
              </th>
              <th>
                Пароль
              </th>
            </tr>
          </thead>
<?php
while($r = mysql_fetch_array($rez)) {
          ?>
          <tbody class="hov">
            <tr onclick="location.href='edit_post_cl.php?id=<?php echo $r['idcl']?>'">
              <td>
                <?php echo $r['idcl']; ?></td>
              <td>
                <?php echo $r['first_name']; ?></td>
              <td>
                <?php echo $r['marka']; ?></td>
              <td>
                <?php echo $r['gos_nomer']; ?></td>
              <td>
                <?php echo $r['telefon']; ?></td>
              <td>
                <?php echo $r['date_rg']; ?></td>
              <td>
                <?php echo $r['login']; ?></td>
              <td>
                <?php echo $r['password']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_clients.php'">
            Добавить клиента</a>
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
