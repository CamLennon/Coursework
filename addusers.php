<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styleDriving.css">
</head>
<body>
  <?php
  include_once('connection.php');
  array_map("htmlspecialchars", $_POST);

  $stmt = $conn->prepare("INSERT INTO DrivingUsers (userid, name, username, password, telephone, email, address1, address2, address3)VALUES (NULL, :name,:username,:password,:telephone,:email,:address1,:address2,:address3)");

  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':username', $_POST['username']);
  $stmt->bindParam(':password', $_POST['password']);
  $stmt->bindParam(':telephone', $_POST['phone']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':address1', $_POST['address1']);
  $stmt->bindParam(':address2', $_POST['address2']);
  $stmt->bindParam(':address3', $_POST['address3']);
  $stmt->execute();
  $conn=null;
  ?>

  <p>Successfully added user</p>
  <button onclick="window.location.href = 'users.php';">Add another?</button>
  <button onclick="window.location.href = 'login.html';">Log in</button>


</body>
</html>
