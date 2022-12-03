<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Myconnect = "localhost";
$database_Myconnect = "test";
$username_Myconnect = "root";
$password_Myconnect = "g12345678";
$Myconnect = mysql_pconnect($hostname_Myconnect, $username_Myconnect, $password_Myconnect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>