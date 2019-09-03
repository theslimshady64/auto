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
 $rez = mysql_query("SELECT * FROM clients WHERE idcl='$id'");
        $r = mysql_fetch_array($rez);
        
        if(isset($_POST['save']))
        {
        if(!empty($_POST['first_name'])){ if(!empty($_POST['marka'])){ if(!empty($_POST['gos_nomer'])){ if(!empty($_POST['telefon'])){ if(!empty($_POST['login'])){ if(!empty($_POST['password'])){
        $first_name = strip_tags(trim($_POST['first_name']));
        $marka = strip_tags(trim($_POST['marka']));
        $gos_nomer = strip_tags(trim($_POST['gos_nomer']));
        $telefon = strip_tags(trim($_POST['telefon']));
        $login = strip_tags(trim($_POST['login']));
        $password = strip_tags(trim($_POST['password']));
        mysql_query("UPDATE clients SET first_name='$first_name', marka='$marka', gos_nomer='$gos_nomer', telefon='$telefon', login='$login', password='$password' WHERE idcl='$id'");
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
        else $result = "Заполнены не все поля";
        }
        if(isset($_POST['del']))
        {
        mysql_query(" DELETE FROM clients WHERE idcl='$id'");
        mysql_close();
        $result = "Запись успешно удалена";
        }
        
        ?>
        <form method="post" action="edit_post_cl.php?id=<?php echo $id; ?>">
          <div class="fff">
            <input type="text" name="first_name" value="<?php echo $r['first_name']; ?>" placeholder="ФИО" class="form-control">
            <input type="text" name="marka" value="<?php echo $r['marka']; ?>" placeholder="Марка" class="form-control">
            <input type="text" name="gos_nomer" value="<?php echo $r['gos_nomer']; ?>" placeholder="Гос номер" class="form-control">
            <input type="text" name="telefon" value="<?php echo $r['telefon']; ?>" placeholder="Телефон" class="form-control">
            <input type="text" name="login" value="<?php echo $r['login']; ?>" placeholder="Логин" class="form-control">
            <input type="text" name="password" value="<?php echo $r['password']; ?>" placeholder="Пароль" class="form-control">
          </div>
          <br>
          <p>
            <input type="submit" name="save" value="Сохранить изменения" class="btn btn-default">
            <input type="submit" name="del" value="Удалить запись" class="btn btn-default">
          </p>
        </form>
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
