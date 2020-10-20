<?php
include "select_database.php";

function test(){
    if(($_POST['account']=="aa123")&&($_POST['password']=="a123")){
        header("location:img_root.php?name=root");
    }
    elseif(!empty($_POST['account']) && !empty($_POST['password'])){
    $username=$_POST["account"];
    $password=$_POST["password"];
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from register where `username` = '$username' and `password` = '$password'";
    $sth=$link->prepare($sql);
    $sth->execute();
    $result=$sth->fetch(PDO::FETCH_ASSOC);
    if($result["name"]=="root"){
        $result ? header("location:result.php?name=root") : header("location:member.php");
    }
    else{
        $result ? header("location:img.php?name=$result[name]") : header("location:member.php");
    }
}
    else{
    header("location:member.php");
}
}

test();

?>
