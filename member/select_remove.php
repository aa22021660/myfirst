<?php
include "select_database.php";
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$delete="delete from register where name='$name'";
$link->exec($delete);
header("location:select_data.php?name=root");
?>
