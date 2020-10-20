<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>運動中心資料</title>
</head>
<style>

    h1{
        text-align: center;
    }
</style>
<body background="images.jpg">
<h1>運動手冊</h1><br>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="member.php"><?php echo $_GET["name"];?></a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li>
                    <?php
                    $name=$_GET['name'];
                    echo '<a href="Announcement_select.php?name='.$name.'">公告事項</a>';
                    ?>
                </li>
                <li>
                    <?php
                    $name=$_GET['name'];
                    echo '<a href="equipment.php?name='.$name.'">器材借用</a>';
                    ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        運動手冊
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        $name=$_GET["name"];
                        echo "<li><a href=\"basketball.php?name=$name\">籃球</a></li>";
                        echo " <li><a href=\"baseball.php?name=$name\">棒球</a></li>";
                        echo " <li><a href=\"football.php?name=$name\">網球</a></li>";
                        echo "<li><a href=\"badminton.php?name=$name\">羽毛球</a></li>";
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="text-align: right">
            <?php
            $name=$_GET['name'];
            echo "<h3>$name 您好</h3>";
            ?>
        </div>
    </div>
</nav>
</body>
</html>