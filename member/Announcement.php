    <html>
<head>
    <meta charset="UTF-8">
    <title>公告事項</title>
</head>
<style>
    label{
        font-size: 20pt;
    }
    p{
        float: right;
    }
</style>
<body>
<?php
$name=$_GET["name"];
if($name=="root"){
    include "result.php";
}
else{
    include "Permission.php";
}
?>
<form action="login_member.php" method="get" name="form1">
    <div class="form-group" style="text-align: center">
        <label for="name1">姓名：</label><input type="text" name="name" id="name1" class="custom-control-label" style="font-size: 20pt" value="<?php echo $_GET["name"];?>" readonly><br><br>
        <label for="name1">日期：</label><input type="date" name="calendar" id="name1" class="custom-switch" style="font-size: 20pt" required>
        <br><br><br><br>
        <label for="name1">網站：</label><input type="text" name="link" id="name1" style="font-size: 20pt" class="custom-control-label" required>
        <br><br><br><br>
    </div>
    <center><button name=\"but_reset\" style="font-size:20pt">公告</button></center><br><br>
</form>
<?php
$name=$_GET["name"];
$dsn="mysql:dbname=login;host=127.0.0.1:3307";
$user="root";
$passwd="";
$link=new PDO($dsn,$user,$passwd);
$link->query('set names utf8;');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from announcement";
$sth=$link->prepare($sql);
$sth->execute();
if($name=="root"){
    echo "<center><button name=\"but_reset\" style=\"font-size: 20pt\" onclick=\"location.href='result.php?name=root';\">返回</button></center>";
}
else if($name!="root"){
    echo "<center><button name=\"but_reset\" style=\"font-size: 20pt\" onclick=\"location.href='Permission.php?name=$name';\">返回</button></center>";
}
?>
<p>
    <img src="棒球.jpg" width="250" height="160">
</p>
</body>
</html>