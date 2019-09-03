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
    <title> Поиск
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
          <h1>Поиск</h1>
        </div>
<?php   if(isset($_POST['search']))
        {
        $f_n = strip_tags(trim($_POST['first_name']));
        $m_m = strip_tags(trim($_POST['marka']));
        $rez = mysql_query("SELECT * FROM clients WHERE first_name LIKE '%$f_n%' and marka LIKE '%$m_m%'");
        $i = mysql_num_rows($rez);
while($r = mysql_fetch_array($rez)) {
        ?>
        <h4>Всего записей: 
          <?php echo $i; ?></h4>
        <div class="left">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
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
              </tr>
            </thead>
            <tr>
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
            </tr>
<?
} } 
            ?>
          </table>
        </div>
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
