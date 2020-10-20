<?php
$name=$_POST["name"];
$ball=$_POST["ball_project"];
$number=$_POST["ball_number"];
$send=$_POST["calendar"];
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="insert into equipment(name,ball_project,ball_number,send) values ('$name','$ball',$number,'$send')";
$sth=$link->query($sql);
header("location:equipment_table.php?name=$name");
?>