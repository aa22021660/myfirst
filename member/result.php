<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>權限管理</title>
</head>
<style>
    h1{
        text-align: center;
    }
</style>
<body background="images.jpg">
<h1>管理權限</h1><br>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="member.php"><?php echo $_GET["name"];?></a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li>
                    <?php
                    echo '<a href="Announcement.php?name=root">公告事項</a>';
                    ?>
                </li>
                <li>
                    <?php
                    echo '<a href="select_data.php?name=root">查詢資料</a>';
                    ?>
                </li>
                <li>
                    <?php
                    echo '<a href="equipment_root.php?name=root">器材借用</a>';
                    ?>
                </li>
            </ul>
        </div>
        <div style="text-align: right">
            <?php
            $past=$_GET["name"];
            echo "<h3>$past 您好</h3>";
            ?>
        </div>
    </div>
</nav>
</body>
</html>
