<head>
    <meta charset="UTF-8">
    <title>登記系統</title>
</head>
<style>
    div{
        font-size: 40pt;
    }
</style>
<body style="background-color: #6495ed">
<center><div>登記系統</div></center>
<?php
$name=$_GET["name"];
if($name=="root"){
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from equipment";
    $sth=$link->prepare($sql);
    $sth->execute();
    echo '<br><br><br><table border="1" align="center" style="font-size: 20pt">';
    echo '<th>id</th>';
    echo '<th>姓名</th>';
    echo '<th>球類</th>';
    echo '<th>數量</th>';
    echo '<th>借用日期</th>';
    echo '<th>按鈕</th>';
    while (list($id,$name,$ball,$number,$send)=$sth->fetch(PDO::FETCH_NUM)) {
        echo '<tr>';
        echo '<td>' .$id. '</td>';
        echo '<td>' .$name. '</td>';
        echo '<td>' .$ball. '</td>';
        echo '<td>' .$number. '</td>';
        echo '<td>'.$send.'</td>';
        echo '<td><a href="equipment_return.php?id='.$id.'" style="font-size: 20pt">歸還</a></td>';
        echo '</tr><br>';
    }
    echo '</table><br><br>';
    $name=$_GET["name"];
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from equipment";
    $sth=$link->prepare($sql);
    $sth->execute();
    echo "<center><button name=\"but_reset\" style='font-size: 20pt' onclick=\"location.href='result.php?name=root';\">返回</button></center>";
}
else if($name!="root"){
    $name=$_GET["name"];
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from equipment where name='$name'";
    $sth=$link->prepare($sql);
    $sth->execute();
    echo '<br><br><br><table border="1" align="center" style="font-size: 20pt">';
    echo '<th>id</th>';
    echo '<th>姓名</th>';
    echo '<th>球類</th>';
    echo '<th>數量</th>';
    echo '<th>借出日期</th>';
    while (list($id,$name,$ball,$number,$send)=$sth->fetch(PDO::FETCH_NUM)) {
        echo '<tr>';
        echo '<td>' .$id. '</td>';
        echo '<td>' .$name. '</td>';
        echo '<td>' .$ball. '</td>';
        echo '<td>' .$number. '</td>';
        echo '<td>'.$send.'</td>';
        echo '</tr><br>';
    }
    echo '</table><br><br>';
    $name=$_GET["name"];
    $dsn="mysql:dbname=login;host=127.0.0.1:3307";
    $user="root";
    $passwd="";
    $link=new PDO($dsn,$user,$passwd);
    $link->query('set names utf8;');
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from equipment";
    $sth=$link->prepare($sql);
    $sth->execute();
    echo "<center><button name=\"but_reset\" style='font-size: 20pt' onclick=\"location.href='Permission.php?name=$name';\">返回</button></center>";
}
?>
</body>

