<?php
include_once 'db.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>View_all</title>
     <style>
       div {
         background-color: lightblue;
       }
     </style>
 </head>
 <body bgcolor='GREY'>
   <div style="margin-top: 0%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
         <center>Patient details.</center></div>
     <?php
     $sql="SELECT * FROM patient";
     $res = mysqli_query($db,$sql);
     $check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) {?>
         <div style="margin-top: .5%; margin-left:35%; margin-right:35%; font-size: 20px;font-weight: bold">

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
        <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
              <center>Employee details.</center></div>
          <?php
          $sql="SELECT * FROM employee";
          $res = mysqli_query($db,$sql);
          $check = mysqli_num_rows($res);

          if ($check > 0) {
            while($row = mysqli_fetch_assoc($res)) {?>
              <div style="margin-top: .5%; margin-left:35%; margin-right:35%; font-size: 20px;font-weight: bold">

              <?php
              echo "Employee ID: " . $row["E_ID"]. " <br>Name: " . $row["E_Name"]. "<br>Shift: "
                . $row["Shift"]. "<br>Designation: " . $row["Designation"]. "<br>";
              ?>
            </div>
            <?php
          }
        }
             ?>
             <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
                   <center>Doctor details.</center></div>
               <?php
               $sql="SELECT * FROM doctor";
               $res = mysqli_query($db,$sql);
               $check = mysqli_num_rows($res);

               if ($check > 0) {
                 while($row = mysqli_fetch_assoc($res)) {?>
                   <div style="margin-top: .5%; margin-left:35%; margin-right:35%; font-size: 20px;font-weight: bold">

                   <?php
                   echo "Doctor ID: " . $row["D_ID"]. " <br>Name: " . $row["D_Name"]. "<br>Phone: "
                     . $row["D_Phone_no"]. "<br>Qualification: " . $row["Qualification"]. "<br>Address: "
                     . $row["D_Address"]. "<br>";
                   ?>
                 </div>
                 <?php
               }
             }
                  ?>

 </body>
