<?php include 'session_m.php'; ?>
<html>
  <head>
    <title>Оформление заказа</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
    <style type="text/css" media="print">
    input {
  display: none;
}
button {
  display: none;
}

a {
  display: none;
}
    </style>
  </head>
  <body>
  <div id="blank">   
	<div align="center"><h2>Информация о заказе</h2><div>
	<?php require "newbd.php";
  $id = $_GET['id'];
  if(isset($_POST['status_inp'])){
  mysql_query("UPDATE zakaz SET status = 1  WHERE id_zakaz='$id'" );;
  }
  $res = mysql_query("SELECT status FROM zakaz WHERE id_zakaz='$id'");
  while ($row = mysql_fetch_array($res)) {
  $status = $row['status'];
  }  
  if ($status == 1){
    $text = "Готов"; }
  else $text = "Не готов";
  ?>
	<div class='alert alert-info'>Статус: <?php echo $text ?></div> 
<table class="table">
<tr><th>Номер заказа </th></tr>
<? $id = $_GET['id'];
$res_id=mysql_query("SELECT * FROM zakaz WHERE id_zakaz='$id'");
        if(isset($_POST['del']))
        {
        mysql_query("DELETE FROM zakaz WHERE id_zakaz='$id'");
        $resul = "Заказ успешно удален";
        }   
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td> $prise_mas[0]</td></tr>\n";
}     
?>                                        
</table>
<table class="table">
<tr><th>Дата и время заказа</th><th>Клиент</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT DATa , first_name
FROM ZAKAZ,cLIENTs 
WHERE ID_zakaz ='$id' and client_id=idcl");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td></tr>\n";
}  ?>
<tr><th>Марка автомобиля</th><th>Госномер автомобиля</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT marka, gos_nomer
FROM ZAKAZ,cLIENTs 
WHERE ID_zakaz ='$id' and IDcl=client_id");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td></tr>\n";
}         ?>                                        
<tr><th>Наименование услуги</th><th>Cтоимость, рублей</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT nameu, price
FROM USLUGI, zakaz_usl
WHERE idu=usl_id and zakaz_id='$id'");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td>\n";
}
$res_id=mysql_query("SELECT DISTINCT price
FROM ZAKAZ_usl, USLUGI
WHERE zakaz_id ='$id' and idu=usl_id");
while($prise_mas=mysql_fetch_row($res_id))
{
$sum+=$prise_mas[0];
}   
  echo "<tr><th>Общая стоимость</th><th>$sum</th></tr>";  
?>

</table><br>
<div align="center">
<form method="post" action="blank2.php?id=<?php echo $id;?>">
<p><input type = "submit" name="status_inp" value = "Изменить статус на Готов" class="btn btn-success"/></p>
<p><input type="submit" name="del" value="Удалить заказ" class="btn btn-danger"></p>
</form>
<button onclick="window.print();">Печать</button>
<p><?php echo $resul; ?> </p>
<p><a href="zakazi.php">Назад</a></p>
</div>
</div>
</body>
</html>
