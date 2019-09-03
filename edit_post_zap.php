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
        $rez = mysql_query("SELECT * FROM catalog WHERE id_catalog='$id'");
        $r = mysql_fetch_array($rez);
        
        if(isset($_POST['save']))
        {
        if(!empty($_POST['name_zap'])){ if(!empty($_POST['marka_avto_zap'])){ if(!empty($_POST['price_zap'])){ if(!empty($_POST['col_zap'])){ if(!empty($_POST['cat_zap'])){
        $name_zap = strip_tags(trim($_POST['name_zap']));
        $marka_avto_zap = strip_tags(trim($_POST['marka_avto_zap']));
        $price_zap = strip_tags(trim($_POST['price_zap']));
        $col_zap = strip_tags(trim($_POST['col_zap']));
        $cat_zap = strip_tags(trim($_POST['cat_zap']));
        $date = $_POST['date'];
        mysql_query("UPDATE catalog SET name_zap='$name_zap', marka_avto_zap='$marka_avto_zap', price_zap='$price_zap', col_zap='$col_zap', cat_zap='$cat_zap' WHERE id_catalog='$id'");
        mysql_close();
        $result = "Изменения сохранены";
        }
        else $result = "Заполнены не все поля";
        }
        else $result = "Заполнены не все поля";
        }
        else $result = "Заполнены не все поля";
        }
        else $result = "Заполнены не все поля";
        }
        else $result = "Заполнены не все поля";
        }
        if(isset($_POST['del']))
        {
        mysql_query(" DELETE FROM clients WHERE idcl='$id'");
        mysql_close();
        $result = "Запись успешно удалена";
        }
        
        ?>
        <form method="post" action="edit_post_zap.php?id=<?php echo $id; ?>">
          <div class="fff">
            <input type="text" name="name_zap" value="<?php echo $r['name_zap']; ?>" placeholder="Название" class="form-control">
            <input type="text" name="marka_avto_zap" value="<?php echo $r['marka_avto_zap']; ?>" placeholder="Марка авто" class="form-control">
            <input type="text" name="price_zap" value="<?php echo $r['price_zap']; ?>" placeholder="Стоимость" class="form-control">
            <input type="text" name="col_zap" value="<?php echo $r['col_zap']; ?>" placeholder="Количество" class="form-control">
            <input type="text" name="cat_zap" value="<?php echo $r['cat_zap']; ?>" placeholder="Категория" class="form-control">
          </div>
          <br>
          <p>
            <input type="submit" name="save" value="Сохранить изменения" class="btn btn-default">
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
