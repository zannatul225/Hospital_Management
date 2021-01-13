<?php
include_once 'db.php';

session_start();
if(isset($_SESSION['uname'])){
  $name= $_SESSION['uname'];
}
  else {
    header("location: Admin_login.php");
  }

$sql = "SELECT * FROM login where name='$name';";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Home</title>
    <link rel="stylesheet" href="admin_insert.css" type="text/css">
  </head>
  <body>

    <?php

    while($row = mysqli_fetch_array($res)) {
        echo  $row['name'] . "<br>";
        echo "0" . $row['phone'] . "<br>";
        echo $row['email'];

    }
    ?>

      <!--View room information-->

      <div1 class="button">
         <a href="room_details.php" class="login">View Room</a>
      </div1>


  </body>
</html>
