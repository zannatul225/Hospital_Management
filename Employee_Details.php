<?php
include_once 'db.php';

session_start();
if(isset($_SESSION['eid'])){
  $e_id= $_SESSION['eid'];
}
  else {
    header("location: Employee_login.php");
  }

$sql = "SELECT E_ID,E_Name,Shift,Designation,E_Salary  FROM employee NATURAL JOIN financial_update where E_ID='$e_id';";
$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Employee Details</title>
        <style>
          div {
            background-color: lightblue;
          }
        </style>
    </head>
    <body bgcolor='GREY'>
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
            <center>Welcome <?php
        if(isset($_SESSION['e_name'])){
          echo($_SESSION['e_name']);
        }
          else {
            header("location: Employee_login.php");
          }
         ?>
         !! <br>Your detail information.</center></div>
        <?php

          while($row = mysqli_fetch_assoc($res)) {?>

            echo "Employee ID: " . $row["E_ID"]. " <br>Name: " . $row["E_Name"]. "<br>Shift: "
              . $row["Shift"]. "<br>Designation: " . $row["Designation"]. "<br>Salary: " . $row["E_Salary"]. "<br>";

          <?php
        }
      }
           ?>
    </body>
</html>
