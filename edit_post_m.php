<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title> �������������� ������
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
          <h1>�������������� ������</h1>
        </div>
<?php
        $id = $_GET['id'];
$rez = mysql_query("SELECT * FROM managers WHERE idm ='$id'");
        $r = mysql_fetch_array($rez);
        
        if(isset($_POST['save']))
        {
        if(!empty($_POST['first_name'])){ if(!empty($_POST['login'])){ if(!empty($_POST['password'])){
        $first_name = strip_tags(trim($_POST['first_name']));
        $login = strip_tags(trim($_POST['login']));
        $password = strip_tags(trim($_POST['password']));
        mysql_query("UPDATE managers SET first_name='$first_name', login='$login', password='$password' WHERE idm='$id'");
        mysql_close();
        $result = "��������� ���������";
        }
        else $result = "��������� �� ��� ����";
        }
        else $result = "��������� �� ��� ����";
        }
        else $result = "��������� �� ��� ����";
        }
        if(isset($_POST['del']))
        {
        mysql_query(" DELETE FROM managers WHERE idm='$id'");
        mysql_close();
        $result = "������ ������� �������";
        }
        
        ?>
        <form method="post" action="edit_post_m.php?id=<?php echo $id; ?>">
          <div class="fff">
            <input type="text" name="first_name" value="<?php echo $r['first_name']; ?>" placeholder="���" class="form-control">
            <input type="text" name="login" value="<?php echo $r['login']; ?>" placeholder="�����" class="form-control">
            <input type="text" name="password" value="<?php echo $r['password']; ?>" placeholder="������" class="form-control">
          </div>
          <br>
          <p>
            <input type="submit" name="save" value="��������� ���������" class="btn btn-default">
            <input type="submit" name="del" value="������� ������" class="btn btn-default">
          </p>
        </form>
        <p>
          <a href="#top">������</a>
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
