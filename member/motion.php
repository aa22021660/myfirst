<html>
  <head>
    <meta charset="UTF-8">
    <title>運動的好處</title>
  </head>
  <style>

    /* 選單中第一層結構 div 的位置 ******************************* */
    .dropdown>div { float: left; margin-right: 5px; }

    /* 選單中第二層結構 button 的樣式 */
    .dropbtn,.definition_but,.home_but,.effect_but,.exit_but{
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      width: 200px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    /* 選單中第二層結構 內容框  */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* 選單中第二層結構 文字連結  */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      display: block;
    }

    /* 選單中第二層結構 文字連結:滑鼠滑入  */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* 有第二層選單的結構框在滑鼠滑入時,改變第二層選單顯示 ********************************/
    .has-dropdown:hover .dropdown-content {
      display: block;
    }

    /* 有第二層選單的結構框在滑鼠滑入時,改變按鈕的樣式 ******************************* */
    .has-dropdown:hover button {
      background-color: #3e8e41;
    }
  </style>
  <body background="運動島.png">
    <div class="dropdown">
        <?php
        @$name=$_GET["name"];
        $dsn="mysql:dbname=login;host=127.0.0.1:3307";
        $user="root";
        $passwd="";
        $link=new PDO($dsn,$user,$passwd);
        $link->query('set names utf8;');
        $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="select * from register";
        $sth=$link->prepare($sql);
        $sth->execute();
        echo "<div><button class=\"home_but\" onclick=\"location.href='member.php';\">返回</button></div>";
?>
      <div><button class="definition_but" onclick="location.href='sport_definition.php';">定義</button></div>
      <div><button class="effect_but" onclick="location.href='effect.php';">影響</button></div>
    </div>
  </body>
</html>