<?php
@$id=$_GET['id'];
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$delete="delete from equipment where id=$id";
$link->exec($delete);
header("location:equipment_root.php?name=root");
?>