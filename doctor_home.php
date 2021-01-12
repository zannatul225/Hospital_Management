<?php
include_once 'db.php';

session_start();
if(isset($_SESSION['d_id'])){
  $d_id= $_SESSION['d_id'];
}
  else {
    header("location: Doctor_login.php");
  }

$sql = "SELECT * FROM doctor where D_ID='$d_id';";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Patient Details</title>
        <link rel="stylesheet" href="admin_insert.css" type="text/css">
        <style>
          div {
            background-color: lightblue;
          }
        </style>
    </head>
    <body bgcolor='GREY'>
      <button onclick="document.getElementById('demo').innerHTML=Date()">The time is?</button>

      <p id="demo"></p>
      
      <div style="margin-top: 2%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
            <center>Welcome <?php
        if(isset($_SESSION['d_name'])){
          echo($_SESSION['d_name']);
        }
          else {
            header("location: Doctor_login.php");
          }
         ?>
         !! <br>Your details of your information.</center></div>
        <?php
        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 2%; margin-left:35%; margin-right:35%; font-size: 20px;font-weight: bold">

            <?php
            echo "Doctor ID: " . $row["D_ID"]. " <br>Name: " . $row["D_Name"]. "<br>Qualification: "
              . $row["Qualification"]. "<br>Phone no: " . $row["D_Phone_no"]. "<br>Address: "
              . $row["D_Address"]. "<br>";
            ?>
          </div>
          <?php
        }
      }
           ?>
           <div class="button" style="margin-top:2%; font-size: 20px;font-weight: bold; text-align:center">
             <form action="doctor_search.php" method="post">
              To search for Patient enter patient ID:
             <input type="text" name="p_id" ><input type="submit" value="Search"></form>
           </div>
           <center><div class="button" style="margin-top:0%; font-size: 20px;font-weight: bold">
             To insert patient update:
             <a href="Doctor_Insert.php" class="login">Insert</a>
           </div>
         </center>
    </body>
</html>
