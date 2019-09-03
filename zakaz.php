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
    <title> Оформление заказа
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chosen.css" />
  </head>
  <body>
<?php include 'nav_m.php';
include 'newbd.php';
$id = $_GET['id'];
$res_id2=mysql_query("SELECT * FROM clients")
or die(mysql_error());
$num=mysql_num_rows($res_id2);
    ?>
    <div class="container">
      <div class="starter-template">
        <div class="page-header">
          <h1>Оформление заказа</h1>
        </div>
        <form method="post">
          <h2>Выберите клиента</h2>
          <select name="klient" class="chosen">
<?php
while ($num=mysql_fetch_row($res_id2))
{
echo "<option value='$num[0]'>$num[1]</option>\n";
}
            ?>
          </select>
          <br>
          <br>
          <p>
            <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_clients.php'"> Добавить клиента
            </button>
          </p>
          <h2>Выберите услуги</h2>
          <div class="fff">
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i1');">Диагностика</a></h3></li>
            </ul>
          </div>
<?php
$rez = mysql_query("SELECT * FROM USLUGI where category_id = '1'");
          ?>
          <div id="$i1" style="display:none;">
<?php
while($r1 = mysql_fetch_array($rez)) {
            ?>
            <ul class="list-group">
              <li class="list-group-item">
                <input type="checkbox" name="options[]" value="<?php echo $r1['IDU'];?>"> &nbsp;&nbsp;
                <label>
                  <?php echo $r1['NAMEU']; 
                  ?>     
                </label></li>
            </ul>
<?php
} 
            ?>
            <p align="center">
              <button type="button" class="btn btn-primary" onclick="javascript:window.location='edit_zakaz.php?id=1'"> Добавить услугу
              </button>
            </p>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i2');">Ремонт двигателя</a></h3></li>
            </ul>
          </div>
<?php
$rez = mysql_query("SELECT * FROM USLUGI where category_id = '2'");
          ?>
          <div id="$i2" style="display:none;">
<?php
while($r2 = mysql_fetch_array($rez)) {
            ?>
            <ul class="list-group">
              <li class="list-group-item">
                <input type="checkbox" name="options[]" value="<?php echo $r2['IDU'];?>"> &nbsp;&nbsp;
                <label>
                  <?php echo $r2['NAMEU']; 
                  ?>
                </label></li>
            </ul>
<?php

} 
            ?>
            <p align="center">
              <button type="button" class="btn btn-primary" onclick="javascript:window.location='edit_zakaz.php?id=2'"> Добавить услугу
              </button>
            </p>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i3');">Ремонт кузова</a></h3></li>
            </ul>
          </div>
<?php
$rez = mysql_query("SELECT * FROM USLUGI where category_id = '3'");
          ?>
          <div id="$i3" style="display:none;">
<?php
while($r3 = mysql_fetch_array($rez)) {
            ?>
            <ul class="list-group">
              <li class="list-group-item">
                <input type="checkbox" name="options[]" value="<?php echo $r3['IDU'];?>"> &nbsp;&nbsp;
                <label>
                  <?php echo $r3['NAMEU']; 
                  ?>
                </label></li>
            </ul>
<?php

} 
            ?>
            <p align="center">
              <button type="button" class="btn btn-primary" onclick="javascript:window.location='edit_zakaz.php?id=3'"> Добавить услугу
              </button>
            </p>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i4');">Покраска</a></h3></li>
            </ul>
          </div>
<?php
$rez = mysql_query("SELECT * FROM USLUGI where category_id = '4'");
          ?>
          <div id="$i4" style="display:none;">
<?php
while($r4 = mysql_fetch_array($rez)) {
            ?>
            <ul class="list-group">
              <li class="list-group-item">
                <input type="checkbox" name="options[]" value="<?php echo $r4['IDU'];?>"> &nbsp;&nbsp;
                <label>
                  <?php echo $r4['NAMEU']; 
                  ?>
                </label></li>
            </ul>
<?php

} 
            ?>
            <p align="center">
              <button type="button" class="btn btn-primary" onclick="javascript:window.location='edit_zakaz.php?id=4'"> Добавить услугу
              </button>
            </p>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="javascript:onoff('$i5');">Прочее</a></li>
            </ul>
          </div>
<?php
$rez = mysql_query("SELECT * FROM USLUGI where category_id = '5'");
          ?>
          <div id="$i5" style="display:none;">
<?php
while($r5 = mysql_fetch_array($rez)) {
            ?>
            <ul class="list-group">
              <li class="list-group-item">
                <input type="checkbox" name="options[]" value="<?php echo $r5['IDU'];?>"> &nbsp;&nbsp;
                <label>
                  <?php echo $r5['NAMEU']; 
                  ?>
                </label></li>
            </ul>
<?php

} 
            ?>
            <p align="center">
              <button type="button" class="btn btn-primary" onclick="javascript:window.location='edit_zakaz.php?id=5'"> Добавить услугу
              </button>
            </p>
          </div>
          </div>
          <p>
            <button type="button" class="btn btn-primary" onclick="javascript:window.location='new_category.php'"> Добавить категорию услуг
            </button>
          </p>
          <p>
            <INPUT TYPE="submit" name="send" VALUE="Добавить" class="btn btn-success">
            <INPUT TYPE="Reset" VALUE="Очистить форму" class="btn btn-default">
          </p>
        </form>
<?
$date = date('Y-m-d');
if (isset($_POST['send'])) {
if (isset($_POST['options'])) {
$query2="insert into zakaz (client_id, data, sum) values ('".$_POST['klient']."','$date', '$sum_rez')";
$rez2 = mysql_query("SELECT * FROM zakaz WHERE id_zakaz = (SELECT MAX(id_zakaz) FROM zakaz)");
$r2 = mysql_fetch_array($rez2);
$id_zakaz = $r2['id_zakaz']+1;
$options = implode(",", $_POST['options']);
$arr = explode(",", $options);
$ress = count($arr);
$query1="insert into ZAKAz_usl (usl_id, zakaz_id) values";
for ($i=0; $i<$ress; $i++) {
$query1 .= "($arr[$i], $id_zakaz), ";
}
$query1 = rtrim( $query1, ', ' );
if(mysql_query($query2))
{
if(mysql_query($query1))
{
$result = "<div class='alert alert-success'>Запись добавлена успешно</div><a href='blank2.php?id=$id_zakaz'>Просмотр оформленного заказа</a>";
}  
else {}
}
else {}
}
else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
}
echo $result;              
        ?>
      </div>
    </div>
    <!-- /.container -->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/chosen2.js"></script>
<script type="text/javascript" src="js/chosen.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery(".chosen").chosen().change(function(e){
console.log(e);
});
jQuery(".chosenexample").chosen().change(function(e){
$('.infoch').fadeOut().empty().text($(this).val()).fadeIn();
});
$('#button').click(function(){
$('#append').load('chosen.html',function(){
jQuery(".chosennew").chosen().change(function(e){
console.log($(this).val());
});
});
});
});
</script>
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
