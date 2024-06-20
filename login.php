<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body class="lag">

  <div  class="header">
        <h2>WELCOME Trainers! to Pokemon Trading Card Game Library! <p>Login to Enter </h2>
  </div>

  <form class="img" method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button style="background-image: url('wp10462180-bright-yellow-patterns-wallpapers.jpg'); " type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Sign up</a>
        </p>
  </form>
</body>
</html>
