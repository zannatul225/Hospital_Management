<?php
include_once '../db.php';
$sql = "SELECT * FROM doctor;";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Doctor Details</title>
        <style>
        div {
          background-color: lightblue;
        }
        table {
          margin-top: 20px;
          margin-left: 300px;
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 80%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        *{
          font-family: tahoma;
        }
        </style>
    </head>
    <body>
      <?php
      include "nav.php"
       ?>
                <center><h2 style="padding-top:10px;"> Doctor details of our hospital </h2></center>
                <?php
                echo "<table>
                    <tr>
                        <th>Doctor ID</th>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>Specialised in</th>
                        <th>D_Phone_no</th>
                        <th>D_Address</th>
                    </tr>";
                while($row = mysqli_fetch_array($res)) {
                  echo "<tr>";
                    echo "<td>" . $row['D_ID'] . "</td>";
                    echo "<td>" . $row['D_Name'] . "</td>";
                    echo "<td>" . $row['Qualification'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . $row['D_Phone_no'] . "</td>";
                    echo "<td>" . $row['D_Address'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>";

                ?>
              <br>
    </body>
</html>
