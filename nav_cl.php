<? $id = $_GET['id'];
include 'newbd.php';
$rez = mysql_query("SELECT first_name FROM clients WHERE idcl='$id'");
while($r = mysql_fetch_array($rez)) { $client_name = $r['first_name']; }
 ?>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only" >Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $client_name ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li><a href="zakaz_cl.php?id=<?php echo $id?>">Оформление предварительного заказа</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Списки <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="zakazi_cl.php?id=<?php echo $id?>">Заказы</a></li>
              <li><a href="zakazi_cl_early.php?id=<?php echo $id?>">Предварительные заказы</a></li>
              <li><a href="catalog_cl.php?id=<?php echo $id?>">Запчасти</a></li>
              <li><a href="price_cl.php?id=<?php echo $id?>">Услуги</a></li>
           </ul>
          </li>
          <li><a href="index.php">Выход</a></li>
          </ul>
        </div>
      </div>
</div>
