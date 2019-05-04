<?php
  $con = mysqli_connect("fdb22.awardspace.net","2824252_camsdatabase","lennon1234","2824252_camsdatabase");
  $failedlogin = False;

  $myusername = mysqli_real_escape_string($con,$_POST['usnm']);
  $mypassword = mysqli_real_escape_string($con,$_POST['pswd']);

  $sql = "SELECT username,password FROM DrivingUsers WHERE username = '$myusername'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['password'];
  if ($mypassword==$active) {

    $_SESSION['loggedinid'] = $row['userid'];

    $_SESSION['loggedinname'] = $row['username'];

    $_SESSION['loggedinstatus'] = True;

    echo '<script type="text/javascript">
           window.location = "http://camlennon.info/driving/account.html"
      </script>';

  } else {
    echo '<script type="text/javascript">
           window.location = "http://camlennon.info/driving/login.html"
      </script>';
  }
?>
