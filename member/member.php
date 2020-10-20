<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>運動中心系統</title>
    <h2>
        <script language="javascript">
            var Today = new Date();
            document.write(Today.getFullYear() + " 年 " + (Today.getMonth() + 1) + " 月 " + Today.getDate() + " 日");
        </script>
    </h2>
</head>
<style>
    label {
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
        background-color: #ffffbb;
        height:640px;
        opacity: 0.9;
    }

    section:after {
        content: "";
        display: table;
        clear: both;
    }

    footer {
        padding: 10px;
        text-align: right;
        width: 1420px;
        height: 100px;
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
        nav, article {
            width: 100%;
            height: auto;
        }
    }

    table {
        font-size: 20pt;
        border-collapse: collapse;
        border: 1px solid black;
    }
</style>
<head>
<body>
<header>
    <marquee style="font-family: 新細明體; font-size: 24pt; color:#33FFFF;
        etter-spacing: 2pt; text-align: center; word-spacing: 0;
                 border-style: ridge"
             align="middle"
             bgcolor="#000080"
             width="1500"
             height=40>
        歡 迎 來 到 運 動 中 心 系 統
    </marquee>
</header>
<section>
    <nav>
        <ul>
            <form action="member_in.php" method="post" name="form1">
                <div class="form-group" style="text-align: center">
                    <label for="name1" style="font-size: 20pt">帳號：</label><input type="text" name="account" id="name1"
                                                                                 class="custom-control-label"
                                                                                 style="font-size: 13pt" required>
                    <br><br><br><br>
                    <label for="name1" style="font-size: 20pt">密碼：</label><input type="password" name="password"
                                                                                 id="name1" style="font-size: 13pt"
                                                                                 class="custom-control-label" required>
                    <br><br>
                    <button name="login_send" style="font-size: 20pt">登入</button>
                    <a href="registered.html" style="font-size: 20pt">註冊</a>
                </div>
            </form>
        </ul>
        <ul>
            <br><br>
            <embed src="完美落地.mp4" allowfullscreen="true" width="440" height="250">
        </ul>
    </nav>
    <article>
        <center>
            <label for="name1">注意事項</label><br><br>
        </center>
        <h1>
            1.點選「註冊」<br><br>
            2.目的：改變人生<br><br>
            3.動機：我喜歡運動，因此我創造了此專題叫做「運動中心系統」。<br><br>
            4.打一場球400元<br><br>
            5.借一次球200元<br><br>
        </h1>
    </article>
</section>
</body>
</html>
