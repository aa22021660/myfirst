<?php
include "Permission.php";
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from Announcement";
$sth=$link->prepare($sql);
$sth->execute();
$result=$sth->fetchall(PDO::FETCH_ASSOC);
$result = json_decode(json_encode($result));
echo '<br><br><table border="1" align="center" style="font-size: 20pt">';
echo '<tr>';
echo '<th>id</th>';
echo '<th>日期</th>';
echo '<th>使用者</th>';
echo '<th>網站</th>';
echo '</tr>';
foreach ($result as $va)
{
    echo '<tr>';
    echo '<td>' .$va->id.'</td>';
    echo '<td>' .$va->calendar. '</td>';
    echo '<td>' .$va->name. '</td>';
    echo '<td><a href="'.$va->link.'">' .$va->link. '</a></td>';
    echo '</tr>';
}
echo '</table>';
?>