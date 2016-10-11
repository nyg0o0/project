<?php

/* information of the database */
$db_server = "localhost";
$db_name = "lrs";
$db_user = "root";
$db_passwd = "12345678";

// connect to the database
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");
mysql_query("SET NAMES utf8");

// select the database
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
?> 