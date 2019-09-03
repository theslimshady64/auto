<?php
 session_start(); 
 $login = $_SESSION['login_cl'];
 $pass = $_SESSION['pass_cl'];
 if ($login == null)
 {
    if ($pass == null)
    {
    header("Location: index.php");
    exit();
    }
 }
?>
