<style>
    table{
        text-align: center;
    }
</style>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include "Announcement_data.php";

$new_calendar=date("Y-m-d",strtotime($calendar));
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$insert="insert into announcement(name,calendar,link) values('$name','$new_calendar','$url')";
$sth=$link->query($insert);
if($sth==true)
{
  echo '<table border="1" align="center">';
  echo '<tr>';
  echo '<th>日期</th>';
  echo '<th>使用者</th>';
  echo '<th>公告網站</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>'.$new_calendar.'</td>';
  echo '<td>'.$name."</td>";
  echo '<td><a href="'.$url.'">'.$url.'</a></td>';
  echo '</tr>';
  echo '</table>';
}
?>