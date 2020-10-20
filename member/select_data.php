    <html>
<head>
    <meta charset="UTF-8">
    <title>查看資料</title>
</head>
<body>
<style>
    table{
        font-size:20pt;
        border-collapse:collapse;
        border:1px solid black;
    }
    button{
        font-size: 20pt;
    }
    th,td{
        text-align: center;
    }
</style>
<?php
$name=$_GET["name"];
if($name=="root"){
    include "result.php";
}
else{
    include "Permission.php";
}

$name=$_GET['name'];
if($name=='root')
{
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from register";
    $sth=$link->prepare($sql);
    $sth->execute();
    $result=$sth->fetchall(PDO::FETCH_ASSOC);
    $result = json_decode(json_encode($result));
    echo '<br><br><br><table border="1" align="center">';
    echo '<th>id</th>';
    echo '<th>姓名</th>';
    echo '<th>帳號</th>';
    echo '<th>手機</th>';
    echo '<th>地址</th>';
    echo '<th>會員</th>';
    echo '<th>按鈕</th>';
    echo '<tr>';
    foreach ($result as $va)
    {
        echo '<tr>';
        echo '<td><a href="select_update.php?id='.$va->id.'&&name='.$va->name.'&&username='.$va->username.'&&password='.$va->password.
        '&&one_password='.$va->one_password.'&&phone='.$va->phone.'&&address='.$va->address.'&&member='.$va->member.'">' .$va->id. '</a></td>';
        echo '<td>' .$va->name. '</td>';
        echo '<td>' .$va->username. '</td>';
        echo '<td>' .$va->phone. '</td>';
        echo '<td>' .$va->address. '</td>';
        echo '<td>' .$va->member. '</td>';
        echo '<td><a href="select_remove.php?name='.$va->name.'" style="font-size: 20pt">刪除</a></td>';
        echo '</tr>';
    }
    echo '</table><br><br>';
    echo "<center><button name=\"but_reset\" style='font-size: 20pt' onclick=\"location.href='result.php?name=root';\">返回</button></center>";
}
?>
</body>
</html>
