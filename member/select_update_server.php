<?php
include 'select_database.php';
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="update register set name='$name',username='$username',password='$password'
  ,one_password='$one_password',phone='$phone',address='$address',member='$member'where id='$id'";
    $conn=$link->prepare($sql);
    $conn->execute();
    header("location:select_data.php?name=root");
?>
