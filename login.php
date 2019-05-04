<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styleDriving.css">
</head>
<body>
  <form action="loginprocess.php" method= "POST">
  <?php
  echo '<input type="hidden" name="location" value="';
  if(isset($_GET['location'])) {
      echo htmlspecialchars($_GET['location']);
  }else{$_GET['Location']="index.php";}
  echo '" />'
  ?>
    User name:<input class="form-group" type="text" name="Username"><br>
    Password:<input class="form-group" type="password" name="Pword"><br>
  <input type="submit" value="Login">
</body>
</html>
