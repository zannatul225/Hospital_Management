<?php
include_once 'db.php';

$p_id = mysqli_real_escape_string($db, $_POST['p_id']);

$sql = "SELECT P_ID, P_Name, Test_Report, Disease, D_ID FROM patient NATURAL JOIN disease_and_diagnosis where P_ID='$p_id';";


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
        <center>Patient you searched for.</center></div>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
            <?php
          echo "Patient id: " . $row["P_ID"]. " <br>Name: " . $row["P_Name"]."<br>Test Report: "
          . $row["Test_Report"]. "<br>Doctor ID: "  . $row["D_ID"]. "<br>Disease: "
           . $row["Disease"]."<br>" ;
          ?>
        </div>
          <?php
        }
      }
         ?>
      </center>

      </body>
      </html>
