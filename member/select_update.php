<html>
<head>
    <meta charset="UTF-8">
    <title>更新資料</title>
</head>
<body background="橙色.png">
<style>
    table{
        font-size: 20pt;
        border-collapse:collapse;
        border:1px solid black;
    }
    button{
        font-size: 20pt;
    }
    h1{
        text-align: center;
    }
</style>
<br><br><br><br><br><br><br><br><br><br>
<form action="select_update_server.php" method="get">
    <h1>
        <?php
        echo "這是第".$_GET['id']."位資料";
        ?>
    </h1>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <td><input type="text" name="user_ID" value="<?php echo $_GET['id'];?>" readonly="readonly"></td>
            <th>姓名</th>
            <td><input type="text" name="name" value="<?php echo $_GET['name'];?>"></td>
            <th>手機</th>
            <td><input type="text" name="phone" value="<?php echo $_GET['phone'];?>"></td>
        </tr>
        <tr>
            <th>帳號</th>
            <td><input type="text" name="username" value="<?php echo $_GET['username'];?>"></td>
            <th>密碼</th>
            <td><input type="password" name="password" value="<?php echo $_GET['password'];?>"></td>
            <th>再輸入一次密碼</th>
            <td><input type="password" name="one_password" value="<?php echo $_GET['one_password'];?>"></td>
        </tr>
        <tr>
            <th>會員</th>
            <td><select name="member" required style="width: 175px">
                    <option value="VIP">VIP會員</option>
                    <option value="common">普通會員</option>
                </select></td>
            <th>地址</th>
            <td colspan="3"><input type="text" name="address" size="73" value="<?php echo $_GET['address'];?>"></td>
        </tr>
        <tr>
    </table>
    <br><br><br>
    <center><input type="submit" name="but_update" value="更新" style="font-size: 20pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
        $name=$_GET['name'];
        echo " <button type=\"button\" name=\"but_reset\" onclick=\"location.href='result.php?name=root';\">返回</button>"
        ?>
    </center>
</form>
</body>
</html>