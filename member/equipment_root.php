<style>
    table{
        font-size: 25pt;
    }
</style>
<?php

include 'result.php';

$past=$_GET["name"];

$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from equipment";
$sth=$link->prepare($sql);
$sth->execute();
$result=$sth->fetchall(PDO::FETCH_ASSOC);
$result = json_decode(json_encode($result));
if($past=="root"){
    echo '<br><br><br><table border="1" align="center">';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>姓名</th>';
    echo '<th>借用球種</th>';
    echo '<th>顆數</th>';
    echo '<th>日期</th>';
    echo '<th>按鈕</th>';
    echo '</tr>';
    foreach ($result as $va)
    {
        echo '<tr>';
        echo '<td>' .$va->id.'</td>';
        echo '<td>' .$va->name. '</td>';
        echo '<td>' .$va->ball_project. '</td>';
        echo '<td>' .$va->ball_number. '</td>';
        echo '<td>' .$va->send. '</td>';
        echo '<td><a href="equipment_root_remove.php?id='.$va->id.'">刪除</a></td>';
        echo '</tr>';
    }
    echo '</table><br><br>';
    echo "<center><button name=\"but_reset\" style='font-size: 20pt' onclick=\"location.href='result.php?name=root';\">返回</button></center>";
}
?>