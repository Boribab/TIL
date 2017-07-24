<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <?php
    $id = $_GET["id"];
    $password = $_GET["password"];

    $rid = $_GET["rid"];
    $rpassword = $_GET["rpassword"];
    if($password == $rpassword && $id == $rid){
      echo "환영합니다";
    } else {
      echo "ㅗ";
    }
     ?>
  </body>
</html>
