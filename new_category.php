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
    <title> Добавить категорию услуг
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
          <h1>Добавить категорию услуг</h1>
        </div>
        <h4>Все поля обязательны к заполнению</h4>
        <form method="post" action="new_category.php">
        <div class="fff">
          <input type="text" name="name_cat" placeholder="Название" class="form-control">
        </div>
          <br>
          <p>
            <input type="submit" name="add" value="Добавить" class="btn btn-default">
            <input type="reset" name="res" value="Очистить" class="btn btn-default">
          </p>
        </form>
<?php include 'newbd.php';
      
if(isset($_POST['add']))
        {
        if(!empty($_POST['name_cat'])){
        $name_usl = strip_tags(trim($_POST['name_usl']));
        mysql_query("INSERT INTO USLUGI(NAMEU) VALUES ('$name_usl')");
        mysql_close();
        $result = "<div class='alert alert-success'>Категория успешно добавлена</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        ?>
        <?php echo $result; ?>
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
