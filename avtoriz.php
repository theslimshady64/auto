<?php 
      if ($_POST['commit'])
       {
        $login = $_POST['login'];
        $password = $_POST['password'];
        session_start();         
        include 'newbd.php';
		    $result = mysql_query("SELECT * FROM managers WHERE login='$login' AND password='$password'");
		    $user = mysql_fetch_assoc($result);
		    if (!empty($user)) {
		    $_SESSION['login_m'] = $_POST['login'];
        $_SESSION['pass_m'] = $_POST['password'];
			  header("Location: clients.php");
        exit();
		    } 
        else { 
        $result = mysql_query("SELECT login, password, idcl FROM clients WHERE login='$login' AND password='$password'");
		    $user = mysql_fetch_assoc($result);
		    if (!empty($user)) {
		    $_SESSION['login_cl'] = $_POST['login'];
        $_SESSION['pass_cl'] = $_POST['password'];
		    $result2 = mysql_query("SELECT login, password, idcl FROM clients WHERE login='$login' AND password='$password'");
		    while($r = mysql_fetch_array($result2)) 
        {
        $idcl = $r['idcl'];
        }
			  header("Location: zakazi_cl.php?id=$idcl");
			  exit();
			  }
			  else { $resul = "<div class='text-center'><div class='alert alert-danger'>Неверный логин или пароль</div></div>";}
        }
        }      
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title> Авторизация
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
              </button>
              <a class="navbar-brand" href="index.php">Автосервис</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
                <a href="avtoriz.php">Авторизоваться</a></li>
                <li>
                <a href="index.php#contact">Контакты</a></li>
                <li>
                <a href="index.php#about">О нас</a></li>
                <li>
                <a href="price_g.php">Услуги</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container"><br>
      <form method="post" action=""  class="form-signin">
        <h2 class="form-signin-heading" align="center">
          Авторизация</h2>
        <input type="text" name="login" class="form-control" value="<?= $_POST['login'] ?>" placeholder="Логин" required autofocus>
        <input type="password" name="password" class="form-control" value="<?= $_POST['password'] ?>" placeholder="Пароль" required>
        <input value="Войти" class="btn btn-lg btn-primary btn-block" type="submit" name="commit">
      </form>
      <!--login-->
<?php   if(isset($_POST['commit'])) {
           echo $resul;
        }
      ?>
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
