<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>運動中心系統</title>
    <h2><script language="javascript">
            var Today=new Date();
            document.write(Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日");
        </script></h2>
</head>
<style>
    label{
        font-size: 20pt;
    }
</style>
<center><label for="name1">運動中心系統</label></center>
<body background="http://www.ouhk.edu.hk/PAU/CampusPhaseIII/Multi-purpose_l.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    header {
        padding: 1px;
        text-align: center;
        font-size: 100px;
        color: white;
    }

    nav {
        float: right;
        width: 30%;
        height: 270px;
        background: #AAFFEE;
        opacity: 0.9;
        padding: 20px;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    article {
        float: left;
        padding: 20px;
        width: 70%;
        background-color: #FFFFBB;
        height: 600px;
        opacity: 0.9;
    }

    section:after {
        content: "";
        display: table;
        clear: both;
    }

    footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
        nav, article {
            width: 100%;
            height: auto;
        }
    }
    table{
        font-size: 20pt;
        border-collapse:collapse;
        border:1px solid black;
    }
</style>
</head>
<body>
<header>
    <marquee style="font-family: 新細明體; font-size: 24pt; color:#33FFFF;
        etter-spacing: 2pt; text-align: center; word-spacing: 0;
                 border-style: ridge"
             align="middle"
             bgcolor="#000080"
             width="1500"
             height=40>
        歡  迎  來  到  運  動  中  心
    </marquee>
</header>
<section>
    <nav>
        <ul>
            <?php
            $name=$_GET["name"];
            echo "<h1>$name"."您好&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='member.php' style='font-size: 20pt'>登出</a></h1><br><br>";
            if($name=="root"){
                echo "<a href=\"result.php?name=$name\" style='font-size:20pt'>1.管理權限</a><br><br>";
                echo "<a href=\"sport_definition.php?name=$name\"style='font-size: 20pt'>2.運動簡介</a><br><br>";
            }
            ?>
        </ul>
        <ul>
            <br><br><br><br>
            <embed src="今晚打球.mp4" allowfullscreen="true" width="420" height="250">
        </ul>
    </nav>
    <article>
        <center><label for="name1">公告事項</label></center>
        <?php
        $name=$_GET["name"];
        if($name=="root"){
            require "Announcement_in.php";
        }
        ?>
    </article>
</section>

</body>
</body>
</html>
