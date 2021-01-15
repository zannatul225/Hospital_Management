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
      <li><a href="all_doctor.php"><i class="fas fa-calendar-week"></i>View Doctors</a></li>
      <li><a href="all_patient.php"><i class="far fa-question-circle"></i>View Patient</a></li>
      <li><a href="all_employee.php"><i class="fas fa-sliders-h"></i>View Employee</a></li>
      <li><a href="room_details.php"><i class="far fa-envelope"></i>View Room</a></li>
      <li><a href="#"><i class="fas fa-qrcode"></i>Update Patient</a></li>
      <li><a href="#"><i class="fas fa-link"></i>Update Doctor</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Update Employee</a></li>

    </ul>
    </div>
  <div class="b1">
    <center><h1>Care and Cure Hospital</h1></center>

    <?php
    while($row = mysqli_fetch_array($res)) {
        echo  $row['name'] . "<br>";
        echo "0" . $row['phone'] . "<br>";
        echo $row['email'];
    }
    ?>
  </div>
  </body>
</html>
