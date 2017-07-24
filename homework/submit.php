<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>submit</title>
  </head>
  <body>
    <form action="./login.php" method="get">
      <input type="text" name="id" placeholder="아이디를 입력하세요" autocomplete="off" autofocus>
      <input type="password" name="password" placeholder="비밀번호를 입력하세요" autocomplete="false">
      <input type="submit" value="로그인">
      <a href="./sign_up.php"><button type="button" name="button">회원가입</button></a>
    </form>
  </body>
</html>
