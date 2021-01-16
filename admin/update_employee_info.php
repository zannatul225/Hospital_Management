<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Info</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <title>Update</title>
    <style>
      div {
        background-color: ;
      }
      body {font-family: Arial;}
      .form{
        margin-left: 20%;
        height: 100%;
        width: 50%;
        position: absolute;
        left: 0px;
        overflow: hidden;
      }

        .form .f{
      font-size: 20px;
      margin: 50px;

    }

     .f h2, .f input{
      text-transform: capitalize;
      display: block;
      color: grey;

    }

    .f input{
      width: 100%;
      height: 40px;
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 20px;
      padding: 0px 10px;
    }

    .f textarea{
      width: 100%;
      height: 200px;
      margin-top: 10px;
      margin-bottom: 20px;
      border-radius: 20px;
      padding: 10px 11px;
      font-size: 15px;
      color: #808080;
    }

    .f input[type=submit]{
      background-color: #23B2DA;
      color: white;
      font-size: 20px;
      border-radius: 20px;

    }
        .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
    }

    .button2:hover {
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }

    </style>
  </head>
  <body>


        <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
        <header>Admin Panel</header>
        <ul>
          <li><a href="admin_home.php"><i class="fas fa-stream"></i>Home Page</a></li>
          <li><a href="admin_view.php"><i class="fas fa-stream"></i>Dashboard</a></li>
          <li><a href="update_patient_info.php"><i class="fas fa-stream"></i>Insert New Patient</a></li>
          <li><a href="#"><i class="fas fa-stream"></i>Update Doctor</a></li>
          <li><a href="update_employee_info.php"><i class="fas fa-stream"></i>Update Employee</a></li>
          <li><a href="#"><i class="fas fa-stream"></i>Delete Patient</a></li>

        </ul>
        </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      <!--Update emplyee information-->
    <div style="margin-top: 4%; margin-left:25%; margin-right:10%; font-size: 40px;font-weight: bold; padding:15px; background: #D5DBDB">
    <h1>Update employee Information</h1>

    <input type="text" name="e_id" placeholder="Employee_id" >

    <input type="text" name="shift"  placeholder="shift">

    <input type="text" name="desig"  placeholder="desig">

    <button type="submit" name="submit">Update</button>
    </form>
    </div>



    <?php
    include_once '../db.php';
    if (isset($_POST['submit'])) {

      //Update emplyee information
    $e_id = mysqli_real_escape_string($db, $_POST['e_id']);
    $shift = mysqli_real_escape_string($db, $_POST['shift']);
    $desig = mysqli_real_escape_string($db, $_POST['desig']);

    $sql = "UPDATE employee SET Shift = '$shift', Designation = '$desig' WHERE E_ID = '$e_id';";
    mysqli_query($db, $sql);
    ?>

        <div style="margin-top: 4%; margin-left:25%; margin-right:10%; font-size: 40px;font-weight: bold; padding:15px; background: #D5DBDB">
          <h1 style="margin:0px; padding:0px;">Updated info of Employee</h1>
          <?php
          $sql = "SELECT * FROM employee WHERE E_ID = '$e_id';";
          $res = mysqli_query($db,$sql);

          $row = mysqli_fetch_array($res);

            echo "Employee ID: " . $row["E_ID"];
            echo "<br>Shift: " . $row["Shift"];
            echo "<br>Test Report: "  . $row["Designation"];
            ?>
          </div>
            <?php
          }
       ?>

  </body>
</html>
