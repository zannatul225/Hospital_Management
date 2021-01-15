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
      <li><a href="admin_home.php"><i class="fas fa-stream"></i>Home</a></li>
      <li><a href="all_doctor.php"><i class="fas fa-stream"></i>View Doctors</a></li>
      <li><a href="all_patient.php"><i class="fas fa-stream"></i>View Patient</a></li>
      <li><a href="all_employee.php"><i class="fas fa-stream"></i>View Employee</a></li>
      <li><a href="room_details.php"><i class="fas fa-stream"></i>View Room</a></li>
    </ul>
    </div>
  </body>
</html>
