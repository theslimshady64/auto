<?php
 session_start(); 
 $login = $_SESSION['login_m'];
 $pass = $_SESSION['pass_m'];
 if ($login == null)
 {
    if ($pass == null)
    {
    header("Location: index.php");
    exit();
    }
 }
?>
