<html>
<head>
    <meta charset="UTF-8">
    <title>器材借用</title>
</head>
<style>
    h1,select,button,label{
        font-size: 20pt;
        text-align: center;
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
<form action="equipment_server.php" method="post" name="form1">
    <div class="form-group" style="text-align: center">
        <label for="name1">姓名：</label><input type="text" size="20" class="custom-control-label" name="name" id="name1" style="width: 20%;font-size: 20pt" value="<?php echo $name=$_GET['name'];?>" readonly><br><br>
        <label for="name1">器材項目：</label><select name="ball_project" class="custom-select" style="width: 20%;font-size: 20pt">
            <option value="baseball">棒球</option>
            <option value="basketball">籃球</option>
            <option value="tennis">網球</option>
            <option value="badminton">羽毛球</option>
        </select><br><br>
        <label for="name1">數量：</label><select name="ball_number" class="custom-select" style="width: 20%;font-size:20pt">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select><br><br>
        <label for="name1">日期：</label><input type="date" name="calendar" id="name1" class="custom-switch" style="font-size: 20pt" required><br><br>
        <center><button name=\"but_ball\" style='font-size: 20pt'">登記</button></center>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</form>
<?php
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
?>
<p>
    <br><br><br><br><br>
    <img src="籃球框.jpg" width="250" height="150">
</p>
</body>
</html>