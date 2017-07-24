<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>phplogin</title>
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if($password == "1111"){
        echo "주인님 환영합니다.";
      } else {
        echo "ㅗ";
      }
     ?>
  </body>
</html>
