<?php
include_once '../db.php';

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
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Sider Menu Bar CSS</title> -->
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>My App</header>
    <ul>
      <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
      <li><a href="#"><i class="fas fa-link"></i>Shortcuts</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Overview</a></li>
      <li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
      <li><a href="#"><i class="far fa-question-circle"></i>About</a></li>
      <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
      <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
    </ul>
    </div>
  <section></section>

  <center><h1>Care and Cure Hospital</h1></center>

  <?php
  while($row = mysqli_fetch_array($res)) {
      echo  $row['name'] . "<br>";
      echo "0" . $row['phone'] . "<br>";
      echo $row['email'];
  }
  ?>

  <!--View room information-->

  <div1 class="button">
     <a href="../room_details.php" class="login">View Room</a>
  </div1>
  </body>
</html>
