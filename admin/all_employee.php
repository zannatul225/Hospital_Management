<?php
include_once '../db.php';
$sql = "SELECT * FROM employee;";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="admin.css">
        <title>All Employee Details</title>
        <style>
        div {
          background-color: lightblue;
        }
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    </head>
    <body>
      <?php
      include "nav.php"
       ?>
                <center><h2> Employee details of our hospital </h2></center>
                <?php
                echo "<table>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Shift</th>
                        <th>Designation</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>salary</th>
                    </tr>";
                while($row = mysqli_fetch_array($res)) {
                  echo "<tr>";
                    echo "<td>" . $row['E_ID'] . "</td>";
                    echo "<td>" . $row['E_Name'] . "</td>";
                    echo "<td>" . $row['Shift'] . "</td>";
                    echo "<td>" . $row['Designation'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['salary'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>";

                ?>
              <br>
    </body>
</html>
