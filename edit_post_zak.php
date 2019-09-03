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
    <title> Редактирование записи
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
          <h1>Редактирование записи</h1>
        </div> 
<?php
        $id = $_GET['id'];
        $rez = mysql_query("SELECT * FROM USLUGI WHERE IDU ='$id'");
        $r = mysql_fetch_array($rez);
        
if(isset($_POST['save']))
        {
        if(!empty($_POST['name_usl'])){ if(!empty($_POST['price_usl'])){ 
        $name_usl = strip_tags(trim($_POST['name_usl']));
        $price_usl = strip_tags(trim($_POST['price_usl']));
        mysql_query("UPDATE USLUGI SET NAMEU='$name_usl', price='$price_usl' WHERE IDU='$id'");
        mysql_close();
        $result = "Услуга успешно сохранена";
        }
        else $result = "Заполнены не все поля";
        }
        else $result = "Заполнены не все поля";
        }
                if(isset($_POST['del']))
        {
        mysql_query(" DELETE FROM USLUGI WHERE IDU='$id'");
        mysql_close();
        $result = "Запись успешно удалена";
        }
        ?>
        <form method="post" action="edit_post_zak.php?id=<?php echo $id; ?>">
          <div class="fff">
            <input type="text" name="name_usl" value="<?php echo $r['NAMEU']; ?>" placeholder="Название" class="form-control">
            <input type="text" name="price_usl" value="<?php echo $r['price']; ?>" placeholder="Стоимость" class="form-control">
          </div>
          <br>
          <p>
            <input type="submit" name="save" value="Сохранить" class="btn btn-default">
            <input type="submit" name="del" value="Удалить запись" class="btn btn-default">
          </p>
        </form>
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
