<?php
include 'register_data.php';
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from register where username='$username'";
$sth=$link->prepare($sql);
$sth->execute(array($name,$username,$password,$one_password,$phone,$address,$member));
$result=$sth->fetch(PDO::FETCH_ASSOC);
if($result["username"]==$username)
{
    header("location:registered.html");
}
else if($one_password==$password)
{
    $insert="insert into register(name,username,password,one_password,phone,address,member) values ('$name','$username','$password','$one_password','$phone','$address','$member')";
    $sth1=$link->query($insert);
    if($sth1)
    {
        header("location:member.php");
    }
}
else if($password!=$one_password)
{
    header("location:registered.html");
}
?>


