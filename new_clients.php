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
    <title> Добавить клиента
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
          <h1>Добавить клиента</h1>
        </div>
        <h4>Все поля обязательны к заполнению</h4>
        <form method="post" action="new_clients.php">
          <div class="fff">
            <input type="text" name="first_name" placeholder="ФИО" class="form-control">
            <input type="text" name="marka" placeholder="Марка" class="form-control">
            <input type="text" name="gos_nomer" placeholder="Гос.номер" class="form-control">
            <input type="text" name="telefon" placeholder="Телефон" class="form-control">
            <input type="text" name="login" placeholder="Логин" class="form-control">
            <input type="text" name="password" placeholder="Пароль" class="form-control">
            <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>">
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
        if(!empty($_POST['first_name'])){ if(!empty($_POST['marka'])){ if(!empty($_POST['gos_nomer'])){ if(!empty($_POST['telefon'])){ if(!empty($_POST['login'])){ if(!empty($_POST['password'])){
        $first_name = strip_tags(trim($_POST['first_name']));
        $marka = strip_tags(trim($_POST['marka']));
        $gos_nomer = strip_tags(trim($_POST['gos_nomer']));
        $telefon = strip_tags(trim($_POST['telefon']));
        $login = strip_tags(trim($_POST['login']));
        $password = strip_tags(trim($_POST['password']));
        $date = $_POST['date'];
        mysql_query("INSERT INTO clients(first_name, marka, gos_nomer, telefon, login, password, date_rg)
                     VALUES ('$first_name', '$marka', '$gos_nomer', '$telefon', '$login', '$password', '$date')");
        mysql_close();
        $result = "<div class='alert alert-success'>Клиент успешно добавлен</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
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
