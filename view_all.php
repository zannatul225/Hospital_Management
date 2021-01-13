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
       table {
         width: 100%;
         border-collapse: collapse;
         }

       table, td, th {
         border: 1px solid black;
         padding: 5px;
         }

         th {text-align: left;}
     </style>
 </head>
 <body bgcolor='GREY'>
   <div style="margin-top: 0%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
         <center>Patient details.</center></div>
     <?php
     $sql="SELECT * FROM patient";
     $res = mysqli_query($db,$sql);
     $check = mysqli_num_rows($res);
     echo "<table>
         <tr>
             <th>Patient ID</th>
             <th>Patient Name</th>
             <th>Phone No</th>
             <th>Address</th>
             <th>Test Report</th>
             <th>Doctor ID</th>
             <th>Room No</th>
         </tr>";
      while($row = mysqli_fetch_array($res)) {
        echo "<tr>";
          echo "<td>" . $row['P_ID'] . "</td>";
          echo "<td>" . $row['P_Name'] . "</td>";
          echo "<td>" . $row['P_Phone_no'] . "</td>";
          echo "<td>" . $row['P_Address'] . "</td>";
          echo "<td>" . $row['Test_Report'] . "</td>";
          echo "<td>" . $row['D_ID'] . "</td>";
          echo "<td>" . $row['Room_No'] . "</td>";

        echo "</tr>";
         }
         echo "</table>";

        ?>
        <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
              <center>Employee details.</center></div>
          <?php
          $sql="SELECT * FROM employee";
          $res = mysqli_query($db,$sql);
          $check = mysqli_num_rows($res);
          echo "<table>
              <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Shift</th>
                  <th>Designation</th>
              </tr>";
            while($row = mysqli_fetch_array($res)) {
              echo "<tr>";
                echo "<td>" . $row['E_ID'] . "</td>";
                echo "<td>" . $row['E_Name'] . "</td>";
                echo "<td>" . $row['Shift'] . "</td>";
                echo "<td>" . $row['Designation'] . "</td>";
              echo "</tr>";
               }
               echo "</table>";

             ?>
             <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 30px;font-weight: bold">
                   <center>Doctor details.</center></div>

               <?php
               $sql="SELECT * FROM doctor";
               $res = mysqli_query($db,$sql);
               $check = mysqli_num_rows($res);
               echo "<table>
                     <tr>
                         <th>Doctor ID</th>
                         <th>Name</th>
                         <th>Phone</th>
                         <th>Qualification</th>
                         <th>category</th>
                         <th>Address</th>
                     </tr>";
               while($row = mysqli_fetch_array($res)) {
                   echo "<tr>";
                     echo "<td>" . $row['D_ID'] . "</td>";
                     echo "<td>" . $row['D_Name'] . "</td>";
                     echo "<td>" . $row['D_Phone_no'] . "</td>";
                     echo "<td>" . $row['Qualification'] . "</td>";
                     echo "<td>" . $row['category'] . "</td>";
                     echo "<td>" . $row['D_Address'] . "</td>";
                   echo "</tr>";
                      }
                      echo "</table>";
                ?>

 </body>
 </html>
