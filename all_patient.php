<?php
include_once 'db.php';
$sql = "SELECT * FROM patient;";

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
                <center><h2> Room details of our hospital </h2></center>
                <?php
                echo "<table>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
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
              <br>
    </body>
</html>
