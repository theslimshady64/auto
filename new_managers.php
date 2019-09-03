<?php include 'session.php'; ?>
<html>
  <head>
    <title>Регистрация менеджеров</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
<div id="header"></div><!--header-->
    <?php include 'nav.php'; ?>
    <div id="body">
        <h2>Регистрация менеджеров</h2>
        <h4><?php echo date('Y-m-d');?></h4>
        <hr>
        <h4>Все поля обязательны к заполнению</h4>
        <form method="post" action="new_managers.php">
        <div class="fff">
        <input type="text" name="first_name" placeholder="ФИО" class="form-control">
        <input type="text" name="login" placeholder="Логин" class="form-control">
        <input type="text" name="password" placeholder="Пароль" class="form-control">
        <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>">
        </div><br>
        <p>
        <input type="submit" name="add" value="Добавить" class="btn btn-default">
        <input type="reset" name="res" value="Очистить" class="btn btn-default">
        </p>
        </form>
        <?php include 'newbd.php'; 
        
        if(isset($_POST['add']))
        {
        if(!empty($_POST['first_name'])){ if(!empty($_POST['login'])){ if(!empty($_POST['password'])){
        $first_name = strip_tags(trim($_POST['first_name']));
        $login = strip_tags(trim($_POST['login']));
        $password = strip_tags(trim($_POST['password']));
        $date = $_POST['date'];
        mysql_query("INSERT INTO managers(first_name, login, password, date_rg)
                     VALUES ('$first_name', '$login', '$password', '$date')");
        mysql_close();
        $result = "<div class='alert alert-success'>Менеджер успешно добавлен</div>";
        }
        else $result = "<div class='alert alert-warning'>Заполнены не все поля</div>";
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
