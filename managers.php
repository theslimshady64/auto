<?php include 'session.php'; ?>
<html>
  <head>
    <title>Менеджеры</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
<div id="header"></div><!--header-->
    <?php include 'nav.php'; ?>
    <div id="body">
      <h2>Список менеджеров</h2>
      <h4><?php echo date('Y-m-d');?></h4>
      <hr>
      <?php include 'newbd.php'; 
      $rez = mysql_query("SELECT * FROM managers");
      $i = mysql_num_rows($rez);
      ?>
      
      <h3>Поиск по списку менеджеров</h3>
        <h4>Введите Имя или Фамилию</h4>
        <form method="post" action="search.php" class="form-signin">
        <div class="fff">
        <input type="text" name="first_name" placeholder="ФИО" class="form-control">
        </div>
        <p><br>
        <input type="submit" name="search" value="Поиск" class="btn btn-default">
        <input type="reset" name="res" value="Очистить" class="btn btn-default">
        </p>
        </form>
      
      <h4>Всего записей: <?php echo $i; ?></h4>
      <p><button type="button" class="btn btn-success" onclick="javascript:window.location='new_managers.php'">Добавить менеджера</a></button></p>
      <table class="table">
      <thead class="thead-inverse">
         <tr>
          <th>Номер</th>
          <th>ФИО</th>
          <th>Дата регистрации</th>
          <th>Логин</th>
          <th>Пароль</th>
        </tr>
        </thead>

<?php
while($r = mysql_fetch_array($rez)) {
?>
       <tbody class="hov">
        <tr onclick="location.href='edit_post_m.php?id=<?php echo $r['idcl']?>'">
          <td><?php echo $r['idm']; ?></td>
          <td><?php echo $r['first_name']; ?></td>
          <td><?php echo $r['date_rg']; ?></td>
          <td><?php echo $r['login']; ?></td>
          <td><?php echo $r['password']; ?></td>
        </tr>
        </tbody>
<?php
}
?>
      </table>
      <p><button type="button" class="btn btn-success" onclick="javascript:window.location='new_managers.php'">Добавить менеджера</a></button></p>
    <p><a href="#top">Наверх</a></p></div>
    <!--body-->
<?php include 'footer.php'; ?>
  </body>
</html>
