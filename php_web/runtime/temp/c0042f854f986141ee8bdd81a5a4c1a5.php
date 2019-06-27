<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\login.html";i:1559566334;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login For Me</title>	
	 <link href="/static/css/master.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="login-box">
      <img src="/static/images/tou.jpg" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form action="/Login" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username" value="" >
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="pwd" value=""  >
		
        <input type="submit" value="Log In">

        <a href="#">Lost your Password?</a><br>
        <a href="#">Don't have An account?</a>
      </form>
    </div>
  </body>
</html>
