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
    <title> Услуги
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
<?php include 'nav_m.php';
include 'newbd.php';
$id = $_GET['id'];
    ?>
    <div class="container">
      <div class="starter-template">
        <div class="page-header">
          <h1>Услуги</h1>
        </div>
        <h3>Поиск по списку услуг</h3>
        <h4>Введите название услуги</h4>
        <form method="post" action="search_usl.php">
          <div class="fff">
            <input type="text" name="NAMEU" placeholder="Название" class="form-control">
          </div>
          <br>
          <p>
            <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"> Поиск</span></button>
            <input type="reset" name="res" value="Очистить" class="btn btn-default">
          </p>
        </form>
<?php include 'newbd.php';
      $rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '1'");
        ?>
        <p>
          <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_zakaz.php'">
            Добавить услугу
          </button>
        </p>
        <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i1');">Диагностика</a></h3></li>
            </ul>
          </div>
        </div>
        <div id="$i1" style="display:none;">
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Услуга
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
            <tr onclick="location.href='edit_post_usl.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
              <td>
                <?php echo $r['price']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        </div>
<?php        $rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '2'");
        ?>
        <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i2');">Ремонт двигателя</a></h3></li>
            </ul>
          </div>
        </div>
        <div id="$i2" style="display:none;">
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Услуга
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
            <tr onclick="location.href='edit_post_usl.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
              <td>
                <?php echo $r['price']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        </div>
<?php        $rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '3'");
        ?>
        <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i3');">Ремонт кузова</a></h3></li>
            </ul>
          </div>
        </div>
        <div id="$i3" style="display:none;">
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Услуга
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
            <tr onclick="location.href='edit_post_usl.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
              <td>
                <?php echo $r['price']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        </div>
<?php        $rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '4'");
        ?>
        <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i4');">Покраска</a></h3></li>
            </ul>
          </div>
        </div>
        <div id="$i4" style="display:none;">
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Услуга
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
            <tr onclick="location.href='edit_post_usl.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
              <td>
                <?php echo $r['price']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        </div>
<?php        $rez = mysql_query("SELECT * FROM USLUGI WHERE category_id = '5'");
        ?>
        <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i5');">Прочее</a></h3></li>
            </ul>
          </div>
        </div>
        <div id="$i5" style="display:none;">
        <div class="left">
        <table class="table">
          <thead>
            <tr>
              <th>
                Услуга
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
            <tr onclick="location.href='edit_post_usl.php?id=<?php echo $r['IDU']?>'">
              <td>
                <?php echo $r['NAMEU']; ?></td>
              <td>
                <?php echo $r['price']; ?></td>
            </tr>
          </tbody>
<?php
}
          ?>
        </table>
        </div>
        </div>
          <p>
            <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_zakaz.php'">
              Добавить услугу
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

<script>function onoff(t){
	p=document.getElementById(t);
	if(p.style.display=="none"){
	p.style.display="block";}
	else{
	p.style.display="none";}
  }
  </script>

  </body>
</html>
