<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登录页面</title>
</head>
<body>
  <div class="login">
    <form action="checklogin.php" method = "POST" >
      <label for="usename">用户名:</label>
      <input id = "username" type="text" name = "username" value = "">
      <label for="password">密码:</label>
      <input id = "pasword" type="password" name = "password" value = "">
      <input type="submit" vlaue = "提交">
    </form>
  </div>
</body>
</html>
