<?php
error_reporting(0);
session_start();
//require "security.php";
//session_destroy();
mysql_connect("localhost","hmengine_works","hmengine_workspace")||die("connection error");
mysql_select_db("hmengine_workspace")||die("database error");
error_reporting(0);
?>