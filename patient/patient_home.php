<?php
include_once 'db.php';

session_start();
if(isset($_SESSION['p_id'])){
  $p_id= $_SESSION['p_id'];
}
  else {
    header("location: Employee_login.php");
  }

$sql = "SELECT * FROM patient where P_ID='$p_id';";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Patient Details</title>
        <style>
          div {
            background-color: lightblue;
          }
        </style>
    </head>
    <body bgcolor='GREY'>
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
            <center>Welcome <?php
        if(isset($_SESSION['p_name'])){
          echo($_SESSION['p_name']);
        }
          else {
            header("location: Patient_login.php");
          }
         ?>
         !! <br>Your details of your information.</center></div>
        <?php
        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">

            <?php
            echo "Patient ID: " . $row["P_ID"]. " <br>Name: " . $row["P_Name"]. "<br>Phone: "
              . $row["P_Phone_no"]. "<br>Address: " . $row["P_Address"]. "<br>Test Report: "
              . $row["Test_Report"]. "<br>Doctor ID: " . $row["D_ID"]. "<br>Room no: " . $row["Room_No"]. "<br>";
            ?>
          </div>
          <?php
        }
      }
           ?>
    </body>
</html>
