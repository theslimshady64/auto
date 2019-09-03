<?php include 'session_cl.php'; ?>
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
  $res = mysql_query("SELECT status FROM zakaz_cl WHERE id_zakaz_cl='$id'");
  while ($row = mysql_fetch_array($res)) {
  $status = $row['status'];
  }  
  if ($status == 1){
    $text = "Подтвержден"; }
  else $text = "На рассмотрении";
  ?>
	<div class='alert alert-info'>Статус: <?php echo $text ?></div> 
<table class="table">
<tr><th>Номер заказа </th></tr>
<? 
$res_id=mysql_query("SELECT * FROM zakaz_cl WHERE id_zakaz_cl='$id'");
        if(isset($_POST['del']))
        {
        mysql_query("DELETE FROM zakaz_cl WHERE id_zakaz_cl='$id'");
        $resul = "Заказ успешно удален";
        }   
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td> $prise_mas[0]</td></tr>\n";
}     
?>                                          
</table>
<table  class="table"> 
<tr><th>Дата и время заказа</th><th>Клиент</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT DATa , first_name
FROM zakaz_cl, clients
WHERE id_zakaz_cl ='$id' and client_id=idcl");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td></tr>\n";
}  ?>
<tr><th>Марка автомобиля</th><th>Госномер автомобиля</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT marka, gos_nomer
FROM zakaz_cl, clients
WHERE id_zakaz_cl ='$id' and IDcl=client_id");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td></tr>\n";
}         ?>                                        
<tr><th>Наименование услуги</th><th>Cтоимость, рублей</th></tr>
<?
$res_id=mysql_query("SELECT DISTINCT nameu, price
FROM USLUGI, zakaz_usl_cl
WHERE idu=usl_id and zakaz_id='$id'");
while($prise_mas=mysql_fetch_row($res_id))
{
echo "<tr><td>$prise_mas[0]</td><td>$prise_mas[1]</td>\n";
}
$res_id=mysql_query("SELECT DISTINCT price
FROM zakaz_usl_cl, USLUGI
WHERE zakaz_id ='$id' and idu=usl_id");
while($prise_mas=mysql_fetch_row($res_id))
{
$sum+=$prise_mas[0];
}   
echo "<tr><th>Общая стоимость</th><th>$sum</th></tr>";  
?>

</table>
<div align="center">
<p><a href="zakazi_client.php?id=1">Назад</a></p>
<br><br>
</div></div>
</body>
</html>
