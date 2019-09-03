<?php include 'session_m.php'; ?>
<?php include 'session.php'; ?>
<html>
  <head>
    <title>Добавить услугу</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
<div id="header"></div><!--header-->
    <?php include 'nav2.php'; ?>
    <div id="body">
      <h2>Добавить услугу</h2>
        <h4><?php echo date('Y-m-d');?></h4>
        <hr>
        <h4>Все поля обязательны к заполнению</h4>
        <form method="post" action="new_zakaz.php">
        <div class="fff">
        <input type="text" name="name_usl" placeholder="Название" class="form-control">
        <input type="text" name="price_usl" placeholder="Стоимость" class="form-control">
        </div><br>
        <p>
        <input type="submit" name="add" value="Добавить" class="btn btn-default">
        <input type="reset" name="res" value="Очистить" class="btn btn-default">
        </p>
        </form>
      <?php include 'newbd.php';
      
if(isset($_POST['add']))
        {
        if(!empty($_POST['name_usl'])){ if(!empty($_POST['price_usl'])){ 
        $name_usl = strip_tags(trim($_POST['name_usl']));
        $price_usl = strip_tags(trim($_POST['price_usl']));
        mysql_query("INSERT INTO USLUGI(NAMEU, PRISEU) VALUES ('$name_usl', '$price_usl')");
        mysql_close();
        $result = "<div class='alert alert-success'>Услуга успешно добавлена</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
?>
        <?php echo $result; ?>
    </div>
    <!--body-->
<?php include 'footer.php'; ?>
</body>     
</html>
