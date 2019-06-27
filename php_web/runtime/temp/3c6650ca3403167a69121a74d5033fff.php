<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpstudy\WWW\php_web\public/../app/admin\view\index\login.html";i:1561034002;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign in</title>
    <script src="/static/js/jquery.min.js" type="text/javascript"></script>
    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>


  <body>

    <div class="container" style="width:20%; margin-top:10%; text-align:center;">
        <!-- action="/admin.php/Index" method="post" -->
      <form class="form-signin"   action="/admin.php/Login" method="post"  >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>

        <input id="id" class="form-control" name="username" placeholder="User ID" required autofocus >

        <label for="inputPassword" class="sr-only">Password</label>

        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
        <div class="btn-group btn-group-lg " role="group" aria-label="...">

            <button type="submit" class="btn btn-success">Sign in</button>
            <button type="button" class="btn btn-info">  Register  </button>

        </div>
      </form>
    </div> <!-- /container -->
  
  </body>

</html>
