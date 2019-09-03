<?php
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "root"; // Пользователь БД
$dbpass = ""; // Пароль к базе
$dbname = "newbd"; // Имя базы
$dbconnect = mysql_connect ($dbhost, $dbusername, $dbpass); 
@mysql_select_db($dbname);
?>
